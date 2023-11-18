<?php

namespace App\Http\Controllers\Staff;

use App\Models\Staff;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    public function index()
    {
        return view('staff.home');
    }

}
