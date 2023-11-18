@extends('layouts.dashboard.user_master')
@section('css')

@stop
@section('content')

@include('user.inc.header')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">My Business Registration</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- Row  -->
    <div class="row row-sm">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Max File Upload <b>100MB</b></h4>
                        </div>
                        <p class="mg-b-20">Please upload single file for each file type.</p>
                        @php
                         $userData=DB::table('users')->where('id','=',Auth::user()->id)->first();
                        $fileDetails= DB::table('user_upload_document')->where("user_id", Auth::user()->id)->first();
                      @endphp
                      @if( empty(DB::table('user_upload_document')->count())) 
                      <p class="alert alert-info">Pls Upload documents for further process</p>
                      @elseif($fileDetails->user_id!=' ')
                        @if(is_null($fileDetails->kyc_doc))
                        <p class="alert alert-info">Pls Upload KYC document for further process</p>
                        
                        @else
                        <p class="alert alert-info">Director KYC document is Uploaded</p> 
                        @endif

                        @if(is_null($fileDetails->id_proof))
                        <p class="alert alert-info">Pls Upload ID Proof for further process</p>
                        
                        @else
                        <p class="alert alert-info">Id Proof Uploaded</p>
                        @endif

                        @if(is_null($fileDetails->adress_proof))
                        <p class="alert alert-info">Pls Upload Address Proof for further process</p>
                        
                        @else
                        <p class="alert alert-info">Address Proof Uploaded</p> 
                        @endif
                    {{-- //   else
                    //   {{<p class="alert alert-info">Pls Upload KYC document for further process</p>}} --}}
                      
                      
                      @endif
                    </div>
                    {{-- {{ Form::open(array('method' => 'post', 'route' => array('user.fileUploadMultiple'),  enctype="multipart/form-data"))  }} --}}
                    <form action={{route('user.fileUploadMultiple')}} method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="card-body">
                    <table class="table table-bordered mg-b-0 text-md-nowrap">
                        <thead style="height:70px;">
                            <tr>
                                <td class="wd-lg-60p" style="vertical-align: middle;font-size:15px!important;"><span>Partnership Firm</span></td>
                                <td class="wd-lg-30p" style="vertical-align: middle;font-size:15px!important;"><button type="submit" name="submit" class="btn btn-main-primary btn-block">Upload Documents</button></td>
                            </tr>
                        </thead>
                    </table>
                        <div class="table-responsive" style="border-bottom: 1px solid #deebfd;">
                            <table class="table table-bordered mg-b-0 text-md-nowrap">
                                <thead style="background-color: #c2f0c2">
                                    <tr>
                                        <th class="wd-lg-60p"><span>File Type</span></th>
                                        <th class="wd-lg-30p"><span>File Upload</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php

                                    $serviceDetails= DB::table('service')->where('service_name','=',4)->first();
                                    $containsKyc = Str::contains($serviceDetails->user_doc, ['11']);
                                    $containsAdhaar = Str::contains($serviceDetails->user_doc, ['8']);
                                    $containsId = Str::contains($serviceDetails->user_doc, ['9']);
                                    $containsAdd = Str::contains($serviceDetails->user_doc, ['10']);
                                    @endphp
                                    
                                    @if($containsKyc)
                                    <tr>
                                        <td>
                                            <label class="form-label mg-b-0">Director KYC documents</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="kyc_doc" class="custom-file-input" id="actual-btn">
                                                <label class="custom-file-label" for="actual-btn">
                                                <span id="file-chosen">No file chosen</span></label>
                                            </div>
                                           
                                           
                                        </td>
                                    </tr>
                                    @endif
                                    @if($containsAdhaar)
                                    <tr>
                                        <td>
                                            <label class="form-label mg-b-0">Adhaar Card</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="kyc_doc" class="custom-file-input" id="actual-btn">
                                                <label class="custom-file-label" for="actual-btn">
                                                <span id="file-chosen">No file chosen</span></label>
                                            </div>
                                           
                                           
                                        </td>
                                    </tr>
                                    @endif
                                    @if($containsId)
                                    <tr>
                                        <td>
                                            <label class="form-label mg-b-0">Scanned copies of any one of the ID Proof of the Partners</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="id_proof" class="custom-file-input" id="actual-btn1">
                                                <label class="custom-file-label" for="actual-btn1">
                                                <span id="file-chosen1">No file chosen</span></label>
                                            </div>
                                           
                                        </td>
                                    </tr>
                                    @endif
                                    @if($containsAdd)
                                    <tr>
                                        <td>
                                            <label class="form-label mg-b-0">Address Proof of the Partners</label>
                                        </td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="adress_proof" class="custom-file-input" id="actual-btn2">
                                                <label class="custom-file-label" for="actual-btn2">
                                                <span id="file-chosen2">No file chosen</span></label>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                </div>
            </div><!-- COL END -->

        </div>
        @php
        $userData=DB::table('users')->where('id','=',Auth::user()->id)->first();
        $fileDetails= DB::table('user_upload_document')->where("user_id", Auth::user()->id)->first();
        @endphp
        @if((isset($fileDetails->final_doc) && $fileDetails->final_doc!=''))
        <div class="row row-sm">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">You'r Final Document is ready Do you want to Download?</h4>
                        </div>
                        <br/>
                        
                      {{-- @if( empty(DB::table('user_upload_document')->count())) 
                      <p class="alert alert-info">Pls Upload KYC document for further process</p>
                      @elseif($fileDetails->user_id!=' ')
                        @if($fileDetails->kyc_doc!=' ')
                        <p class="alert alert-info">Director KYC document is Uploaded</p> 
                        @else
                        <p class="alert alert-info">Pls Upload KYC document for further process</p>
                        @endif
                      
                      
                      @endif --}}
                      <div class="input-group file-browser">
                                           
                        <label class="input-group-btn">
                            @if((isset($fileDetails->final_doc) && $fileDetails->final_doc!=''))
                            <a href="/uploads/{{$fileDetails->final_doc}}" download="{{$fileDetails->final_doc}}" type="button" class="btn btn-main-primary ">Download</a>
                             @endif  
                            
                            <span class="pan_card_attachment_prev">
                                @if((isset($fileDetails->final_doc) && $fileDetails->final_doc!=''))
                                <a target="popup" onclick="window.open('/uploads/{{$fileDetails->final_doc}}','name','width=600,height=400')">
                                <button type="button" class="btn btn-main-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                    <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                    </svg>View Document
                                </button>
                                </a>
                               @endif
                            </span>
                        </label>
                    </div><br/>
                    </div>
                    
                </div>
            </div><!-- COL END -->
        </div>
        @endif
    <!-- Row closed -->
</div>

<!-- Container closed -->
@endsection

@push('scripts')
<script>
    const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
const actualBtn1 = document.getElementById('actual-btn1');

const fileChosen1 = document.getElementById('file-chosen1');

actualBtn1.addEventListener('change', function(){
  fileChosen1.textContent = this.files[0].name
})
const actualBtn2 = document.getElementById('actual-btn2');

const fileChosen2 = document.getElementById('file-chosen2');

actualBtn2.addEventListener('change', function(){
  fileChosen2.textContent = this.files[0].name
})

</script>
@endpush
