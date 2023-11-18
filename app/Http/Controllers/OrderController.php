<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Cookie;
use Session;
use Mail;
use PDF;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use Razorpay\Api\Api;
use App\Models\Service;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Redirect;

class OrderController extends Controller
{

    public function index()
    {
        return view('payment');
    }

    public function store(Request $request)
    {
        //print_r(Session::get('cart'));die;
        if (!empty(Session::get('cart'))) {
            $total = 0;
            $order = new Order;
            if (Auth::check()) {
                $order->user_id = Auth::user()->id;
            }
            foreach (Session::get('cart') as $key => $cartItem) {
                $product = Service::find($cartItem['sub_cat_id']);
                $subtotal = $cartItem['servicePrice'];
                $total = $total + $subtotal;
            }
            $order->grand_total = $total;
            $order->coupon_discount = null;
            if ($order->save()) {

                foreach (Session::get('cart') as $key => $cartItem) {
                    $serviceData = Service::find($cartItem['sub_cat_id']);
                    $serviceprice = $cartItem['servicePrice'];

                    $order_detail = new OrderDetail;
                    $order_detail->user_id  = $order->user_id;
                    $order_detail->order_id  = $order->id;
                    $order_detail->service_cat_id  = $cartItem['sub_cat_id'];
                    $order_detail->service_id  = $cartItem['serviceId'];
                    $order_detail->price  = $cartItem['servicePrice'];
                    $order_detail->save();
                    \Session::put('last_order_id', $order->id);
                }
            }
        }
        if($request->has('company')){
        DB::table('users')
        ->where('id', Auth::user()->id)
        ->update(['country' => $request->country,
        'city' => $request->city,
        'zip_code' => $request->zip_code,
        'state' => $request->state,
        'company' => $request->company,
        'address1' => $request->address1],);
        }else{
            DB::table('users')
        ->where('id', Auth::user()->id)
        ->update(['country' => $request->country,
        'city' => $request->city,
        'zip_code' => $request->zip_code,
        'state' => $request->state,
        // 'company' => $request->company,
        'address1' => $request->address1],);
        }
        return redirect('payment');
    }

    public function storepayment(Request $request)
    {
        $input = $request->all();
        $api = new Api('rzp_test_pFbOCEkp9YnHup', 'ME9fTEiOa3I4nPAJmtdMINqp');
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                if ($response->captured) {
                    $lastOrderId = \Session::get('last_order_id');
                    OrderDetail::where("order_id", $lastOrderId)->update(["raz_id" => $response->id, "entity" => $response->entity, "raz_amount" => $response->amount, "raz_currency" => $response->currency, "raz_payment_status" => $response->status, "raz_description" => $response->description, "raz_fee" => $response->fee, "raz_tax" => $response->tax, "raz_created_at" => date('Y-m-d H:i:s', ($response->created_at)), "payment_status" => ($response->status == 'captured') ? 'paid' : 'unpaid']);
                    \Session::put('payment_status', "success");
                }
            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }
        $userData  =User::where('id','=',Auth::user()->id)->first();
        $orderDetails= OrderDetail::where("order_id", \Session::get('last_order_id'))->get();
        // dd($orderDetails);
        foreach($orderDetails as $order){
        // $serviceDetails=DB::table('service_category')->where("id", $orderDetails->service_cat_id)->first();
        // $subCategory=DB::table('sub_category')->where("cat_id", $orderDetails->service_cat_id)->first();
        $subCategoryServices=DB::table('service')->where("id",'=', $order->service_id)->where("service_cat_id",'=', $order->service_cat_id)->first();
        $purchasedetails[$order->service_id]=['service_sub_category'=>$subCategoryServices->service_name,
        'services'=>$subCategoryServices->service_include,'price'=>$order->price,];
        }
        // dd($purchasedetails);
        $dataArray = [
            'email' => $userData->email,
            'mobile' => $userData->mobile_num,
            'name1'=>$userData->firstName,
            'name2'=>$userData->lastName,
            'address'=>$userData->address1,
            'city'=>$userData->city,
            'pin'=>$userData->zip_code,
            'state'=>$userData->state,
            'country'=>$userData->country,
            // 'service_name'=>$serviceDetails->cat_name,
            // 'service_sub_category'=>$subCategoryServices->service_name,
            // 'services'=>$subCategoryServices->service_include,
            
            
            'invoice_id' => $response->id,
           'total_amount'=>$response->amount,
           
            
            'invoice_date' => date('Y-m-d H:i:s', ($response->created_at)),
            'payment_status' => ($response->status == 'captured') ? 'paid' : 'unpaid',

                   
            
          ];
          
        // return $pdf->download('nicesnippets.pdf');
        $pdf = PDF::loadView('emails.invoice-new',compact('dataArray','purchasedetails'));
        Mail::send('emails.invoice-new',compact('dataArray','purchasedetails'), function($message) use ($dataArray,$pdf){
            $message->to($dataArray['email'], 'Tutorials Point')
            ->subject("Invoice is generated for your Tax celler payment")
            ->attachData($pdf->output(), "invoice.pdf");
            //$message->from('xyz@gmail.com','Virat Gandhi');
         });
        \Session::now('success', 'Payment successful. Please Complete Profile for further Process        ');
        if(empty($userData->PAN_Number)){
        return \Redirect::route('editprofile')
        ->with('message','Please Complete Profile for further Process             ');
        }else{
            return \Redirect::route('mysubscription');
            // return view('user.mysubscription',compact('dataArray'));
        }
    }
}
