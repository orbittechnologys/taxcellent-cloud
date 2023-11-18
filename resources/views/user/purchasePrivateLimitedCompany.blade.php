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
                <h4 class="content-title mb-0 my-auto">My {{$serviceDetails->cat_name}}</h4>
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
                            <h4 class="card-title mg-b-0">Max File Upload for each file type <b>5MB</b></h4>
                        </div>
                        <br>
                        {{-- <p class="mg-b-20">Please upload single file for each file type.</p> --}}
                        @php
                            $userData=DB::table('users')->where('id','=',Auth::user()->id)->first();
                            $fileDetails= DB::table('user_upload_document')->where("user_id",Auth::user()->id)->where('cat_id','=',$subCategory->service_cat_id)->where('service_id','=',$subCategory->id)->first();
                            // var_dump($fileDetails);
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
                        <div class="alert alert-info">Please upload documents for further process</div>
                        @else
                        <div class="alert alert-success">
                            <h4 class="card-title mg-b-0"> Uploaded documents</h4>
                            <ul>
                            @foreach($doc_details_present as $docpresent)
                                <li>{{$docpresent}}</li>
                            @endforeach
                            <ul>
                        </div>
                        
                        @if($resultDiff!=[])
                        <div class="alert alert-danger">
                            <h4 class="card-title mg-b-0">Please upload remaining below documents</h4>
                            <ul>
                            @foreach($doc_details_absent as $docabsent)
                                <li>{{$docabsent}}</li>
                            @endforeach
                            <ul>
                        </div>
                       
                        @endif
                        @endif
                        

                      
                      @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
	                        <a type="button" class="close" data-dismiss="alert">×</a>	
                            <strong>{{ $message }}</strong>
                        </div>
                      @endif
                    </div>
                    
                    {{ Form::open(array('method' => 'post', 'route' => array('user.fileUploadMultiple',[$serviceDetails->id,$subCategory->id]),  'files'=>'true'))  }}
                    <div class="card-body">
                    
                            {{csrf_field()}}
                    <table class="table table-bordered mg-b-0 text-md-nowrap">
                        <thead style="height:70px;">
                            <tr>
                                <td class="wd-lg-60p" style="vertical-align: middle;font-size:15px!important;"><span>{{$subCategory->service_name}}</span></td>
                                {{-- <td class="wd-lg-30p" style="vertical-align: middle;font-size:15px!important;">
                                    <input type="button" name="" onclick="addRow('dataTable')" id="addBtn" class="btn btn-main-primary btn-block">Add Row</button></td> --}}
                                <td class="wd-lg-30p" style="vertical-align: middle;font-size:15px!important;">
                                    <button type="submit" name="submit" class="btn btn-main-primary btn-block">Upload Documents</button></td>
                            </tr>
                        </thead>
                    </table>

                        <div class="table-responsive" style="border-bottom: 1px solid #deebfd;">
                            <table class="table table-bordered mg-b-0 text-md-nowrap" id="dataTable">
                                <thead style="background-color: #c2f0c2">
                                    <tr>
                                        <th class="wd-lg-5p"><span>S.R. NO</span></th>
                                        <th class="wd-lg-60p"><span>File Type</span></th>
                                        <th class="wd-lg-30p"><span>File Upload</span></th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    @php

                    $serviceDetails= DB::table('service')->where('service_name','=',$subCategory->service_name)->first();
                    $doc_id=explode(",",$serviceDetails->user_doc);
                    $doc_details=[];
                    $count=0;
                    foreach($doc_id as $id){
                    $documentDetails= DB::table('documents_list')->where('id','=',$id)->first();
                                    // $containsPan = Str::contains($documentDetails->doc_name, ['PAN']);
                    $doc_details[$id]=$documentDetails->doc_name;
                                    
                     }
                                

                    @endphp
                                    
                                    @foreach($doc_details as $id=>$doc)
                                      
                                    
                                    <tr>
                                        <td>
                                            
                                            <label class="form-label mg-b-0">{{$count=$count+1}}</label>
                                        </td>
                                        <td>
                                            
                                            <label class="form-label mg-b-0">{{$doc}}</label>
                                        </td>
                                        <td>
                                            <div class="input-group file-browser">
                                                <input type="text" name="file_id" class="form-control border-right-0 browse-file" placeholder="choose" readonly="" value="">
                                                <label class="input-group-btn">
                                                    <span class="btn btn-default">
                                                        {{-- <input type="hidden" name="file_id" value="{{$doc_details}}"> --}}
                                                        Browse <input type="file" name="{{$doc}}[]" class="d-none aadhar_card_attachment" value={{$id}} id="fileInput" accept=".doc,.docx,.pdf,.xls,.xlsx,.csv,.jpg,.jpeg,.png,.ppt,.pptx" multiple>
                                                    </span>
                                                   
                                                </label>
                                            </div>
                                            
                                           
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div><!-- COL END -->
         @php
        $userData=DB::table('users')->where('id','=',Auth::user()->id)->first();
        $fileDetails= DB::table('user_upload_document')->where("user_id", Auth::user()->id)->where('cat_id','=',$serviceDetails->service_cat_id)->where('service_id','=',$serviceDetails->id)->first();
        @endphp
        @if((isset($fileDetails->final_doc) && $fileDetails->final_doc!=''))
        </div>
        <div class="row row-sm">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">You'r Final Document is ready Do you want to Download?</h4>
                        </div>
                        <br/>
                        
                      <div class="input-group file-browser">
                                           
                        <label class="input-group-btn">
                            
                            <a href="/uploads/{{$fileDetails->final_doc}}" download="{{$fileDetails->final_doc}}" type="button" class="btn btn-main-primary">Download</a>
                            
                            <span class="pan_card_attachment_prev">
                                <a target="popup" onclick="window.open('/uploads/{{$fileDetails->final_doc}}','name','width=600,height=400')">
                                <button type="button" class="btn btn-main-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                    <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                                    </svg>View Document
                                </button>
                                </a>
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
<script language="javascript">
    var rowIdx = {{$count}};
  
  // jQuery button click event to add a row.
  $('#addBtn').on('click', function () {
   
      // Adding a row inside the tbody.
    //   $('#tbody').append(>
      var html='<tr> <td>\
        <label class="form-label mg-b-0">${++rowIdx}</label>\
                                        </td>\
                                        <td>\
                                            <label class="form-label mg-b-0">Other Document</label>\
                                        </td>\
        <td>\
        <div class="input-group file-browser">\
                                                <input type="text" name="file_id" class="form-control border-right-0 browse-file" placeholder="choose" readonly="" value="">\
                                                <label class="input-group-btn">\
                                                    <span class="btn btn-default">\
                                                        Browse <input type="file" name="extra[]" class="d-none aadhar_card_attachment"  id="fileInput" accept=".doc,.docx,.pdf,.xls,.xlsx,.csv,.jpg,.jpeg,.png,.ppt,.pptx" multiple>\
                                                    </span>\
                                                </label>\
                                            </div>\
                                            </td>\
             </tr>'
             $('#tbody').append(html);
  });
    // function addRow(tableID) {

    //     var table = document.getElementById(tableID);

    //     var rowCount = table.rows.length;
    //     var row = table.insertRow(rowCount);

    //     var cell2 = row.insertCell(0);
    //     cell2.innerHTML = rowCount ;
        

    //     var cell1 = row.insertCell(1);
    //     cell1.innerHTML='<div class="input-group file-browser">
    //                                             <input type="text" name="file_id" class="form-control border-right-0 browse-file" placeholder="choose" readonly="" value="">
    //                                             <label class="input-group-btn">
    //                                                 <span class="btn btn-default">
    //                                                     {{-- <input type="hidden" name="file_id" value="{{$doc_details}}"> --}}
    //                                                     Browse <input type="file" name="{{$doc}}[]" class="d-none aadhar_card_attachment" value={{$id}} id="fileInput" accept=".doc,.docx,.pdf,.xls,.xlsx,.csv,.jpg,.jpeg,.png,.ppt,.pptx" multiple>
    //                                                 </span>
                                                   
    //                                             </label>
    //                                         </div>'
    //     // var element1 = document.createElement("input");
    //     // element1.type = "text";
    //     // element1.name="txtbox[]";
    //     // cell1.appendChild(element1);

        

    //     var cell3 = row.insertCell(2);
    //     var element2 = document.createElement("input");
    //     element2.type = "file";
    //     element2.name = "file[]";
    //     cell3.appendChild(element2);


    // }

    function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }


        }
        }catch(e) {
            alert(e);
        }
    }

</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
    $(document).ready(function () {

        var uploadField = document.getElementById("fileInput");

        uploadField.onchange = function () {
            if (this.files[0].size > 300000) {
                alert("file size is too big")}
                 this.value = "";
                

            
        };



    });
</script> --}}

<script>
    $(document).on("change", ":file", (function() {
    var e = $(this)
        , t = e.get(0).files ? e.get(0).files.length : 1
        , r = e.val().replace(/\\/g, "/").replace(/.*\//, "");
        
        if (this.files[0].size > 5242880) {
            this.value = "";

                alert("File size is too big! Select file size below 5MB")}
                var ext = this.value.substring(this.value.lastIndexOf('.') + 1).toLowerCase();
    if(ext != 'csv' && ext != 'pdf' && ext != 'doc' && ext != 'docx' && ext != 'xls'&&  ext != 'xlsx' && ext != 'jpg' && ext != 'jpeg' && ext != 'png' && ext != 'ppt' && ext != 'pptx' ) {
        alert('Only files with the file extension PDF,DOC,DOCX,XLS,XLSX,PNG,JPG,JPEG,PPT,PPTX or CSV are allowed');
        this.value = "";
    } 
    e.trigger("fileselect", [t, r])
}
)),
$(document).ready((function() {
    $(":file").on("fileselect", (function(e, t, r) {
        var o = $(this).parents(".input-group").find(":text")
            , a = t > 1 ? t + " files selected" : r;
            if (this.files[0].size > 5242880) {
            a = "";
                alert("File size is too big! Select file size below 5MB")}
                var ext = a.substring(a.lastIndexOf('.') + 1).toLowerCase();
    if(ext != 'csv' && ext != 'pdf' && ext != 'doc' && ext != 'docx' && ext != 'xls'&&  ext != 'xlsx' && ext != 'jpg' && ext != 'jpeg' && ext != 'png' && ext != 'ppt' && ext != 'pptx' ) {
        alert('Only files with the file extension PDF,DOC,DOCX,XLS,XLSX,PNG,JPG,JPEG,PPT,PPTX or CSV are allowed');
        a = "";
    } 
        o.length ? o.val(a) : a 
    }
    ))
}
)),
//     updateList = function() {
//     var input = document.getElementById('actual-btn');
//     var output = document.getElementById('file-chosen');
//     var children = "";
//     for (var i = 0; i < input.files.length; ++i) {
//         children +=  input.files.item(i).name ;
//     }
//     output.innerHTML = children;
// }
    // const actualBtn = document.getElementById('actual-btn');
    
    // const fileChosen = document.getElementById('file-chosen');
    
    document.getElementById('actual-btn').addEventListener('change', function(){
      fileChosendocument.getElementById('file-chosen').textContent = this.files[0].name
    })
    // const actualBtn1 = document.getElementById('actual-btn1');
    
    // const fileChosen1 = document.getElementById('file-chosen1');
    
    // actualBtn1.addEventListener('change', function(){
    //   fileChosen1.textContent = this.files[0].name
    // })
    // const actualBtn2 = document.getElementById('actual-btn2');
    
    // const fileChosen2 = document.getElementById('file-chosen2');
    
    // actualBtn2.addEventListener('change', function(){
    //   fileChosen2.textContent = this.files[0].name
    // })
    
    </script>
@endpush
