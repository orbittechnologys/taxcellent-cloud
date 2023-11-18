<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserOtherSection;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use App\Models\ServiceCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function myaccount()
    {
        return view('user.home');
    }

    public function myprofile()
    {
        $userData = User::find(Auth::user()->id);
        return view('user.profile',['userData' => $userData]);
    }

    public function editprofile()
    {
        $userData = User::with('userOtherSection')->find(Auth::user()->id);
        $DOB =  Carbon::parse($userData->dob)->format('Y-m-d');
        $businessDate =  Carbon::parse($userData->business_dor)->format('Y-m-d');
        // print_r($DOB);die;
        return view('user.editprofile',['userData' => $userData,'DOB' => $DOB,'businessDate' => $businessDate]);
    }
    public function userAccountUpadte(Request $request){
        
        $requestData = $request->except(['_token','other','pan_card_attachment','aadhar_card_attachment','gstin_attachment']);
        $userId = Auth::id();
        $userModel = User::find($userId);
        if(!empty($userModel)){
            $this->validate($request, [
                'PAN_Number'  =>  'regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/',
                'aadhar_card_number'  =>  'required_if:profileType,!=,OTHERS|numeric|digits_between:12,12',
            ],
            [ 
                'PAN_Number.regex' => 'The Pan Number format is invalid.'
            ]);

            if($request->GST_Number!='')
            {
                $this->validate($request, [
                    'GST_Number' => 'regex:/^([0-9]){2}([A-Za-z]){5}([0-9]){4}([A-Za-z]){1}([0-9]{1})([A-Za-z]){2}?$/',
                 ],[ 
                    'GST_Number.regex' => 'The GST No format is invalid.'
                ]);
            }
            
           
            if($request->hasfile('pan_card_attachment'))
            {
                if (!file_exists(public_path('uploads/pan_card_attachment'))) {
                    File::makeDirectory(public_path('uploads/pan_card_attachment'), 0777, true, true);
                }
                $this->validate($request, [
                    'pan_card_attachment' => 'mimes:doc,docx,xls,xlsx,csv,jpg,jpeg,png,pdf,ppt,pptx|max:25600'
                ]);
                $image = $request->file('pan_card_attachment');
                $name = $image->getClientOriginalName();
                $image->move(public_path('uploads/pan_card_attachment/'), $name);
                $requestData['pan_card_attachment'] = 'pan_card_attachment/'.$name;
            }
            if($request->hasfile('aadhar_card_attachment'))
            {
                if (!file_exists(public_path('uploads/aadhar_card_attachment'))) {
                    File::makeDirectory(public_path('uploads/aadhar_card_attachment'), 0777, true, true);
                }
                $this->validate($request, [
                    'aadhar_card_attachment' => 'mimes:doc,docx,xls,xlsx,csv,jpg,jpeg,png,pdf,ppt,pptx|max:25600'
                ]);
                $image = $request->file('aadhar_card_attachment');
                $name = $image->getClientOriginalName();
                $image->move(public_path('uploads/aadhar_card_attachment/'), $name);
                $requestData['aadhar_card_attachment'] = 'aadhar_card_attachment/'.$name;
            }
            if($request->hasfile('gstin_attachment'))
            {
                if (!file_exists(public_path('uploads/gstin_attachment'))) {
                    File::makeDirectory(public_path('uploads/gstin_attachment/'), 0777, true, true);
                }
                $this->validate($request, [
                    'gstin_attachment' => 'mimes:doc,docx,xls,xlsx,csv,jpg,jpeg,png,pdf,ppt,pptx|max:25600'
                ]);
                $image = $request->file('gstin_attachment');
                $name = $image->getClientOriginalName();
                $image->move(public_path('uploads/gstin_attachment/'), $name);
                $requestData['gstin_attachment'] = 'gstin_attachment/'.$name;
            }
            $requestData['updated_at'] = Carbon::now();
            // echo '<pre>';
            // print_r($requestData);die;
            $userModel->update($requestData);
            //$userModel->userOtherSection()->detach();
            UserOtherSection::where('users_id', $userId)->delete();
            if($request->filled('other')){
                $otherInfo = $request->only('other');
                foreach ($otherInfo['other'] as $key => $value) {
                    $userOtherSection['users_id'] = $userId;
                    // $userOtherSection['sr_no'] = $value['sr_no'] ?? '';
                    $userOtherSection['document_id_no'] = $value['document_id_name'] ?? '';
                    if(isset($value['attachment']) && !empty($value['attachment'])){
                        //if(in_array($file->getMimeType(), ['image/jpg', 'image/jpeg', 'image/png']) {
                            //$rules["file.$index"] = ["max:$image_max_size"];
                        //}
                        /*$value->validate([
                            'attachment' => 'mimes:doc,docx,xls,xlsx,csv,jpg,jpeg,png,pdf,ppt,pptx|max:25600'
                        ]);*/
                        $image = $value['attachment'];
                        $name = $image->getClientOriginalName();
                        $image->move(public_path('uploads/other_attachment/'), $name);
                        //$requestData['attachment'] = 'other_attachment/'.$name;
                        $userOtherSection['attachment'] = 'other_attachment/'.$name;
                    }
                    UserOtherSection::create($userOtherSection);
                }
            }
            return \Redirect::back()->withSuccess(['Details has been updated successfully.']);
        } else {
            return \Redirect::back()->withErrors(['error' => 'User not found.']);
        }
    }

    public function mydocument()
    {
        return view('user.home');
    }

    public function mypayment()
    {
        return view('user.home');
    }

    public function uploadPanCard(Request $request)
    {
        if($request->hasfile('pan_card_attachment'))
        {
            if (!file_exists(public_path('uploads/pan_card_attachment'))) {
                File::makeDirectory(public_path('uploads/pan_card_attachment'), 0777, true, true);
            }
            
            $image = $request->file('pan_card_attachment');
            $name = $image->getClientOriginalName();
            $image->move(public_path('uploads/pan_card_attachment/'), $name);

            $html = '<a target="popup" onclick="window.open(\'uploads/pan_card_attachment/'. $name .'\',\'name\',\'width=600,height=400\')" onclick="openwindow(\''. $name .'\')">
                    <button type="button" class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                        </svg>View Image
                    </button>
                    </a>';
            return $html;
        }
    }

    public function uploadAadharCard(Request $request)
    {
        if($request->hasfile('aadhar_card_attachment'))
        {
            if (!file_exists(public_path('uploads/aadhar_card_attachment'))) {
                File::makeDirectory(public_path('uploads/aadhar_card_attachment'), 0777, true, true);
            }
            
            $image = $request->file('aadhar_card_attachment');
            $name = $image->getClientOriginalName();
            $image->move(public_path('uploads/aadhar_card_attachment/'), $name);

            $html = '<a target="popup" onclick="window.open(\'uploads/aadhar_card_attachment/'. $name .'\',\'name\',\'width=600,height=400\')" onclick="openwindow(\''. $name .'\')">
                    <button type="button" class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                        </svg>View Image
                    </button>
                    </a>';
            return $html;
        }
    }

    public function uploadGST(Request $request)
    {
        if($request->hasfile('gstin_attachment'))
        {
            if (!file_exists(public_path('uploads/gstin_attachment'))) {
                File::makeDirectory(public_path('uploads/gstin_attachment'), 0777, true, true);
            }
            
            $image = $request->file('gstin_attachment');
            $name = $image->getClientOriginalName();
            $image->move(public_path('uploads/gstin_attachment/'), $name);

            $html = '<a target="popup" onclick="window.open(\'uploads/gstin_attachment/'. $name .'\',\'name\',\'width=600,height=400\')" onclick="openwindow(\''. $name .'\')">
                    <button type="button" class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                        </svg>View Image
                    </button>
                    </a>';
            return $html;
        }
    }
}
