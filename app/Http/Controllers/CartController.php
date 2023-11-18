<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Cookie;
use DB;

class CartController extends Controller
{
    public function mycart(Request $request)
    {
        //$cart = $request->session()->get('cart', collect([]));
        //  //dd($cart->all());
        //  $cart = $cart->map(function ($object, $key) use ($request) {
        //     $originalPrice = (isset($object['servicePrice'])) ? $object['servicePrice'] : $object['price'];
        //     $serviceName = (isset($object['serviceId'])) ? $object['serviceId'] : $object['service'];
        //     $subCatName = (isset($object['sub_cat_id'])) ? $object['sub_cat_id'] : $object['sub_service'];
        //     $object['price'] =  $originalPrice;
        //     unset($object['originalPrice']);
        //     $object['service'] = $serviceName;
        //     unset($object['serviceName']);
        //     $object['sub_service'] = $subCatName;
        //     unset($object['subCatName']);
        //     return $object;
        // });
        // $request->session()->put('cart', $cart);
        // //$categories = Category::all();
        return view('mycart');
    }

    public function addToCart(Request $request)
    {

        $SubCatName = DB::table('service_category')->where('id', $request->sub_cat_id)->get();

        $data = array();

        $data['serviceId'] = $request->serviceId;
        $data['sub_cat_id'] = $request->sub_cat_id;
        $data['servicePrice'] = $request->servicePrice;
        $data['servicePack'] = (isset($request->sub_pack_cat_id)) ? $request->sub_pack_cat_id : '';


        if ($request->session()->has('cart')) {
            //echo 'here';die;
            $foundInCart = false;
            $cart = collect();

            foreach ($request->session()->get('cart') as $key => $cartItem) {

                if (empty($SubCatName)) {

                    if ($cartItem['serviceId'] == $request->serviceId && $cartItem['sub_cat_id'] == $request->sub_cat_id) {
                        // $SubCatName = DB::table('sub_category')->find($request->sub_cat_id)->where('has_sub_type','1');
                        $foundInCart = true;
                        //Session::forget($key);
                    }
                } else {
                    if ($cartItem['serviceId'] == $request->serviceId && $cartItem['sub_cat_id'] == $request->sub_cat_id && $cartItem['servicePack'] == $request->sub_pack_cat_id) {
                        $foundInCart = true;
                    }
                }

                $cart->push($cartItem);
            }
            if (!$foundInCart) {
                $cart->push($data);
                //print_r($request->session()->get('cart'));die;

            }
            $request->session()->put('cart', $cart);
        } else {
            $cart = collect([$data]);
            $request->session()->put('cart', $cart);
        }

        return view('mycart', compact('data'));
    }

    //removes from Cart
    public function removeFromCart(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart', collect([]));
            $cart->forget($request->key);
            $request->session()->put('cart', $cart);
        }

        // return redirect()->back();
        return view('partial.cart_details');
    }
}
