<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Session;
use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){ 
        $userData  =User::where('id','=',Auth::user()->id)->first();
        $orderDetails= DB::table('order_details')->where("user_id", Auth::user()->id)->orderBy('created_at', 'desc')->get();
        
        return view('user.mysubscription',compact('orderDetails'));
    }
    public function purchasePrivateLimitedCompany(Request $request){ 

        $subCategory=DB::table('service')->where("id", $request->serviceID)->first();
        $serviceDetails=DB::table('service_category')->where("id",$request->catID)->first();
        return view('user.purchasePrivateLimitedCompany',compact(['serviceDetails','subCategory']));
    }
    
    public function purchasePartnershipFirm(){ 
        return view('user.purchasePartnershipFirm');
    }
}
