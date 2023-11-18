<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use DB;
use App\Models\Staff;

class Homecontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function index()
    {
        $todayDate = Carbon::now();
        $totalCustumers = User::count();
        $totalApplications = DB::table('service_applications')->count();
        $totalStaff= Staff::count();
        return view('admin.home',['date' => $todayDate,'totalCustumers' => $totalCustumers,'totalApplications' => $totalApplications,'totalStaff' => $totalStaff]);
    }

    public function profile(){
    $profileData = Admin::findOrFail(Auth::guard('admin')->user()->id);
    return view('admin.profile',['adminData' => $profileData]);
    }

    public function editprofile(){
    $profileData = Admin::findOrFail(Auth::guard('admin')->user()->id);
    return view('admin.editprofile',['adminData' => $profileData]);
    }

    public function userAccountUpadte(Request $request){
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required','string','unique:users'],
        ]);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } 
        else{
        $admin = Admin::findOrFail(Auth::guard('admin')->user()->id);

        $admin->name = $request['name'];
        $admin->email = $request['email'];
        $admin->update();
        return back()->with('success', 'Your Profile has been Updated successfully');
        }
    }

    public function userAccountPassword(Request $request){

        $this->validate($request, [
            'password' => ['required', 'string', 'min:5', 'confirmed'],

        ]);
        $admin = Admin::findOrFail(Auth::guard('admin')->user()->id);

        if (!empty($request['password'])) {
            $admin->password = Hash::make($request['password']);
        }
        $admin->update();
        return back()->with('success', 'Your Profile Password Updated successfully');
    }
}
