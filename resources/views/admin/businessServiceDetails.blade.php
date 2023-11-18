@extends('layouts.dashboard.page_master')

@section('content')
@include('admin.inc.header')
@section('css')

<!-- Internal Select2 css -->
{{-- <link href="{{ asset('dashboard/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{ asset('dashboard/assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet"> --}}
<style type="text/css">
    .p-l-3 {
        padding-left: 3px;
    }
    .p-r-3 {
        padding-right: 3px;
    }
   
    .p-b-10 {
        padding-bottom: 10px;
    }
    .p-l-8 {
        padding-left: 8px;
    }
    .m-t-40 {
        margin-top: 40px;
    }
    .table-bordered, .table-bordered td, .table-bordered th {
    border: 1px solid #dde2ef!important;
    }

    .loading {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0,0,0,.5);
    z-index: 999999;
}
.loading-wheel {
    width: 20px;
    height: 20px;
    margin-top: -40px;
    margin-left: -40px;
    
    position: absolute;
    top: 50%;
    left: 50%;
    
    border-width: 30px;
    border-radius: 50%;
    -webkit-animation: spin 1s linear infinite;
}
.style-2 .loading-wheel {
    border-style: double;
    border-color: #ccc transparent;
}
@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0);
    }
    100% {
        -webkit-transform: rotate(-360deg);
    }
}
</style>
@stop
@section('content')

@include('admin.inc.header')



<div class="container-fluid">
    <!-- breadcrumb -->
    {{-- @if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! Session::get('success') !!}</li>
        </ul>
    </div>
@endif --}}
    <div class="breadcrumb-header justify-content-between">
        
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">User Details</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row row-sm">
        
        
        <!-- Col -->
        <div class="col-lg-12">
            <div class="card">

                
                <div class="loading style-2" style="display: none;"><div class="loading-wheel"></div></div>

                
                    <div class="card-body">
                        <div class="mb-4 main-content-label">Basic Profile Information </div>
                        

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <div class="row row-sm mb-3">
                            <div class="col-lg">
                                <label class="form-label">First Name </span></label>
                                <label class="form-label">{{$userData->firstName}}</label>
                                {{-- <input type="text" name="firstName" class="form-control" id="firstName" value="<?=(isset($userData->firstName)) ? $userData->firstName : '';?>" placeholder="First Name"> --}}
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                <label class="form-label">last Name </label>
                                <label class="form-label">{{$userData->lastName}}</label>
                            </div>
                        </div>
                        <div class="row row-sm mb-3">
                            <div class="col-lg">
                                    <label class="form-label">Email </label>
                                    <label class="form-label">{{$userData->email}}</label>
                                    {{-- <input type="email" name="email" class="form-control" id="email" value="<?=(isset($userData->email)) ? $userData->email : '';?>" placeholder="Email Id"> --}}
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <label class="form-label">Phone Number</label>
                                    <label class="form-label">{{$userData->mobile_num}}</label>
                            </div>
                        </div>
                        <div class="row row-sm mb-3">
                            <div class="col-lg">
                                    <label class="form-label">Service Purchased</label>
                                    <label class="form-label">{{$subCategory->service_name}}</label>
                                    {{-- <input type="email" name="email" class="form-control" id="email" value="<?=(isset($userData->email)) ? $userData->email : '';?>" placeholder="Email Id"> --}}
                            </div>
                            
                        </div>
                        
                        <div id="Main_Div" class="hide">
                            
                            @php        
                            $fileDetails= DB::table('user_upload_document')->where("user_id", $userData->id)->where('cat_id','=',$subCategory->service_cat_id)->where('service_id','=',$subCategory->id)->first();
                            if(!($fileDetails === null)){
                            $serviceDetailsFile= DB::table('service')->where('service_name','=',$subCategory->service_name)->first();
                            $adminDoc=explode(',',$serviceDetailsFile->user_doc);
                            $userDoc=explode(',',$fileDetails->doc_id);
                            $resultDiff=array_diff($adminDoc,$userDoc);
                            $resultUnion=array_intersect($adminDoc,$userDoc);
                            // var_dump($resultDiff);
                            // var_dump($resultUnion);
                            
                            foreach($resultDiff as $id){
                            $documentDetails_absent= DB::table('documents_list')->where('id','=',$id)->first();
                                            // $containsPan = Str::contains($documentDetails->doc_name, ['PAN']);
                            $doc_details_absent[]=$documentDetails_absent->doc_name;
                                            
                            }
                            // var_dump($doc_details_absent);
                            foreach($resultUnion as $id){
                            $documentDetails_present= DB::table('documents_list')->where('id','=',$id)->first();
                                            // $containsPan = Str::contains($documentDetails->doc_name, ['PAN']);
                            $doc_details_present[]=$documentDetails_present->doc_name;
                                            
                            }
                        }
                            @endphp
                           @if ($fileDetails === null) 
                           <div class="alert alert-info">User has not Uploaded the documents</div>
                           @elseif($resultDiff!=[])
                        <div class="alert alert-danger">
                            <h4 class="card-title mg-b-0">User has not uploaded remaining below documents</h4>
                            <ul>
                            @foreach($doc_details_absent as $docabsent)
                                <li>{{$docabsent}}</li>
                            @endforeach
                            <ul>
                        </div>
                        <div class="mb-4 main-content-label">Uploaded File</div>
                      
                            
                            @endif
                             @if((isset($fileDetails->office_address_proof) && $fileDetails->office_address_proof!=''))
                            <div id="PANDetails_Div">

                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Address proof of the registered office (ownership documents or rental/lease agreement)</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->office_address_proof);
                                                $val=$fileDetails->office_address_proof;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_office()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->id_proof) && $fileDetails->id_proof!=''))
                            <div id="AadharDetails_Div" >
                                
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">ID proof of the partners (voter ID/Aadhaar Card/ Driving License/Passport)</label>
                                        {{-- <input type="text" name="aadhar_card_number" class="form-control" id="aadhar_card_number" value="<?=(isset($userData->aadhar_card_number)) ? $userData->aadhar_card_number : '';?>" placeholder="Enter Aadhar Card Number"> --}}
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                            <label class="input-group-btn">
                                                
                                                @php
                                                    $docs=explode(",",$fileDetails->id_proof);
                                                   $val=$fileDetails->id_proof;
                                                   
                                                    @endphp
                                                    <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                    
                                               
                                                
                                                <span class="pan_card_attachment_prev">
                                                    
                                                    <a  onclick='open_win_id()'>
                                                     <button   type="button" class="btn btn-secondary">
                                                      
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                   </a>
                                                   
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->bank_statements) && $fileDetails->bank_statements!=''))
                            <div id="AadharDetails_Div" >
                                
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Bank Account statement/ cancelled cheque
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label"> Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                            <label class="input-group-btn">
                                                
                                                @php
                                                    $docs=explode(",",$fileDetails->bank_statements);
                                                   $val=$fileDetails->bank_statements;
                                                   
                                                    @endphp
                                                    <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                    
                                               
                                                
                                                <span class="pan_card_attachment_prev">
                                                    
                                                    <a  onclick='open_win_bank_statements()'>
                                                     <button   type="button" class="btn btn-secondary">
                                                      
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                   </a>
                                                   
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->no_object_certificate) && $fileDetails->no_object_certificate!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            No objection certificate from the owner of the premise to use the premise as registered office.
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->no_object_certificate);
                                                $val=$fileDetails->no_object_certificate ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_no_object_certificate()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->noc_authorised) && $fileDetails->noc_authorised!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Apostilled copy of Board resolution with NOC signed by Authorised Representative
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->noc_authorised);
                                                $val=$fileDetails->noc_authorised ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_noc_authorised()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->adress_proof) && $fileDetails->adress_proof!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Address proof of the applicant (electricity bill/water bill/ telephone bill)
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->adress_proof);
                                                $val=$fileDetails->adress_proof ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_adress_proof()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->adhaar_card) && $fileDetails->adhaar_card!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Aadhaar Card of Partners/ Directors
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->adhaar_card);
                                                $val=$fileDetails->adhaar_card ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_adhaar_card()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->property_tax_receipt) && $fileDetails->property_tax_receipt!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Telephone bills, gas bills, electricity bills of last 2 months or property tax receipts of registered office
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->property_tax_receipt);
                                                $val=$fileDetails->property_tax_receipt ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_property_tax_receipt()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->photo) && $fileDetails->photo!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Passport size photo of Applicant
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->photo);
                                                $val=$fileDetails->photo ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_photo()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->pan_card) && $fileDetails->pan_card!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            PAN of the Directors/Partners
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->pan_card);
                                                $val=$fileDetails->pan_card ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_pan_card()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->incoporation_certificate) && $fileDetails->incoporation_certificate!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Apostilled copy of Incorporation certificate of the foreign body corporate
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->incoporation_certificate);
                                                $val=$fileDetails->incoporation_certificate ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_incoporation_certificate()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->letter_of_authorization) && $fileDetails->letter_of_authorization!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Letter of Authorization/ Board Resolution for Authorized Signatory
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->letter_of_authorization);
                                                $val=$fileDetails->letter_of_authorization ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_letter_of_authorization()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->digital_sign) && $fileDetails->digital_sign!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Digital Signature of the Applicant
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->digital_sign);
                                                $val=$fileDetails->digital_sign ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_digital_sign()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->partnership_deed) && $fileDetails->partnership_deed!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Business incorporation certificate/ partnership deed
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->partnership_deed);
                                                $val=$fileDetails->partnership_deed ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_partnership_deed()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if((isset($fileDetails->passport_copy) && $fileDetails->passport_copy!=''))
                            <div id="PANDetails_Div">
                               
                                <div class="row mg-t-10 mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">
                                            Apostilled Passport copy
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Attachment</label>
                                        <div class="input-group file-browser">
                                           
                                   
                                            <label class="input-group-btn">
                                               
                                                @php
                                                $docs=explode(",",$fileDetails->passport_copy);
                                                $val=$fileDetails->passport_copy ;
                                               
                                                @endphp
                                                <a href="{{route('admin.downloadZip',[$fileDetails->user_id,str_replace('/', '  ', $val)])}}"  type="button" class="btn btn-secondary">Download</a>
                                                
                                                <span class="pan_card_attachment_prev">
                                                   
                                                     <a   onclick="open_win_passport_copy()">
                                                    <button type="button" class="btn btn-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                                        </svg>View Image
                                                    </button>
                                                    </a>
                                                </span>
                                            </label>
                                        </div><br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div id="AadharDetails_Div" >
                                
                               
                                <div class="row mg-t-10 mb-3">
                                <div class="col-lg-6">
                                    <form action={{route('admin.uploadFile', [$userData->id,$subCategory->id,$subCategory->service_cat_id])}} method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                    <label class="form-label">Final File</label>
                                        <div class="input-group file-browser">
                                            <div class="custom-file">
                                                <input type="file" name="final_doc" class="custom-file-input" id="actual-btn">
                                                <label class="custom-file-label" for="actual-btn">
                                                <span id="file-chosen">No file chosen</span></label>
                                                
                                            </div>
                                            &nbsp;&nbsp;&nbsp;
                
                                            <label class="input-group-btn">
                                                
                                                
                                                <span class="pan_card_attachment_prev">
                                                    <button type="submit" name="submit" class="btn btn-secondary">
                                                        Upload file
                                                    </button>
                                                
                                                  
                                                </span>
                                            </label>
                                        </form>
                                        <br/>
                                    
                                    
                                   
                                </div>
                                </div>
                            </div>
                           
                           
                            
                        </div>
                    </div>
                    
            </div>
        </div>
        <!-- /Col -->
    </div>
    <!-- row closed -->
</div>
<!-- Container closed -->
@endsection
@push('scripts')

<script>
    function open_win_partnership_deed() {
        <?php
        if((isset($fileDetails->partnership_deed) && $fileDetails->partnership_deed!='')){
        $mystr =$fileDetails->partnership_deed ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?> <?php } ?>
         }

function open_win_digital_sign() {
        <?php
        if((isset($fileDetails->digital_sign) && $fileDetails->digital_sign!='')){
        $mystr =$fileDetails->digital_sign ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?><?php } ?>
         }
function open_win_letter_of_authorization() {
        <?php
         if((isset($fileDetails->letter_of_authorization) && $fileDetails->letter_of_authorization!='')){
        $mystr =$fileDetails->letter_of_authorization ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?><?php } ?>
         }

         function open_win_incoporation_certificate() {
        <?php
        if((isset($fileDetails->incoporation_certificate) && $fileDetails->incoporation_certificate!='')){
        $mystr =$fileDetails->incoporation_certificate ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?> <?php } ?>
         }
         function open_win_pan_card() {
        <?php
        if((isset($fileDetails->pan_card) && $fileDetails->pan_card!='')){
        $mystr =$fileDetails->pan_card ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?><?php } ?>
         }
         function open_win_photo() {
        <?php
        if((isset($fileDetails->photo) && $fileDetails->photo!='')){
        $mystr =$fileDetails->photo ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?><?php } ?>
         }
         function open_win_property_tax_receipt() {
        <?php
        if((isset($fileDetails->property_tax_receipt) && $fileDetails->property_tax_receipt!='')){
        $mystr =$fileDetails->property_tax_receipt ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?> <?php } ?>
         }
         function open_win_adhaar_card() {
        <?php
        if((isset($fileDetails->adhaar_card) && $fileDetails->adhaar_card!='')){
        $mystr =$fileDetails->adhaar_card ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?><?php } ?>
         }
         function open_win_adress_proof() {
        <?php
        if((isset($fileDetails->adress_proof) && $fileDetails->adress_proof!='')){
        $mystr =$fileDetails->adress_proof ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?> <?php } ?>
         }
         function open_win_noc_authorised() {
        <?php
        if((isset($fileDetails->noc_authorised) && $fileDetails->noc_authorised!='')){
        $mystr =$fileDetails->noc_authorised ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?>
         <?php } ?>
         }
         function open_win_no_object_certificate() {
        <?php
        if((isset($fileDetails->no_object_certificate) && $fileDetails->no_object_certificate!='')){
        $mystr =$fileDetails->no_object_certificate ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?><?php } ?>
         }
         function open_win_bank_statements() {
        <?php
        if((isset($fileDetails->bank_statements) && $fileDetails->bank_statements!='')){
        $mystr =$fileDetails->bank_statements ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?> <?php } ?>
         }
   
function open_win_passport_copy() {
        <?php
        if((isset($fileDetails->passport_copy) && $fileDetails->passport_copy!='')){
        $mystr =$fileDetails->passport_copy ;
         $docs=explode(",",$mystr);
        
        ?>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=0,height=0,left=-1000,top=-1000`;
        <?php foreach($docs as $doc){ ?>
        window.open('/uploads/<?=$doc?>','_blank',params);
         <?php } ?><?php } ?>
         }
   
    function open_win_office() {
        

    <?php
    if((isset($fileDetails->office_address_proof) && $fileDetails->office_address_proof!='')){
    $mystr =$fileDetails->office_address_proof ;
     $docs=explode(",",$mystr);

?>
let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=0,height=0,left=-1000,top=-1000`;
<?php foreach($docs as $doc){ ?>
    
    window.open('/uploads/<?=$doc?>','_blank',params);


<?php } ?><?php } ?>
     }
     function open_win_id() {
        
        <?php
        if((isset($fileDetails->office_address_proof) && $fileDetails->office_address_proof!='')){
        $mystr =$fileDetails->id_proof ;
         $docs=explode(",",$mystr);
    
    ?>
    let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
    width=0,height=0,left=-1000,top=-1000`;
    <?php foreach($docs as $doc){ ?>
        
        window.open('/uploads/<?=$doc?>','_blank',params)
    
    
    <?php } ?><?php } ?>
         }
    </script>
<script>
    const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
</script>


<!-- Addmore template -->


<!--Internal  pickerjs js -->
<script src="{{ asset('dashboard/assets/plugins/pickerjs/picker.min.js') }}"></script>
<!-- Internal form-elements js -->
<script src="{{ asset('dashboard/assets/js/form-elements.js') }}"></script>
<!-- Internal Select2.min js -->
<script src="{{ asset('dashboard/assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/fieldsaddmore-master/jqery.fieldsaddmore.min.js') }}"></script>

@endpush