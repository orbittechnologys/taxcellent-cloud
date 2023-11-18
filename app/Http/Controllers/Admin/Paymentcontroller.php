<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Paymentcontroller extends Controller
{
    public function paymentStatus(){

        return view('admin.paymentStatus');
    }

    public function paymentSummary(){

        return view('admin.paymentSummary');
    }
}
