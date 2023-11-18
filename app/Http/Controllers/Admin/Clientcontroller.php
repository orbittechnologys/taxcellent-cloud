<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use DB;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Staff;

class Clientcontroller extends Controller
{

    public function uersProfile(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.customerProfile');
    }

    public function uersSubscription()
    {
        $orderDetails= DB::table('order_details')->get();
        
        return view('admin.uersSubscription',compact('orderDetails'));
    }
   
}
