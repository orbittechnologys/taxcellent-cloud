@extends('layouts.dashboard.page_master')

@section('content')
@include('admin.inc.header')

<div class="container-fluid">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Services</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ User Services</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    
<div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                        @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">Add Services</h4>
                                    <br><br>
                                    
                                </div>
                                <!--<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="#">Learn
                                        more</a></p>-->
                            </div>
                            

                            <div class="card-body pt-0">
                                <form class="form-horizontal" method="post" action="saveservice">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row row-sm">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label for="ServiceCategory">Service Category</label>
                                            <select class="form-control" name="service_cat_id">
                                                <option>Select Service Category</option>
                                                @if($serviceCatAry)
                                                    @foreach($serviceCatAry as $serviceCatVal)
                                                        <option value="{{$serviceCatVal['id']}}">{{$serviceCatVal['cat_name']}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mg-t-10 mg-lg-t-0">
                                        <div class="form-group">
                                        <label for="ServicesName">Services Name</label>
                                            <input type="text" value="" name="service_name" class="form-control" id="" placeholder="Service Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ServicesIncluded">Select Check List</label>
                                        <select class="form-control select2" name="user_checklist[]" multiple="multiple">
                                               @if($DocumentsListAry)
                                                @foreach($DocumentsListAry as $DocumentsListVal)
                                                    <option value="{{$DocumentsListVal['id']}}">{{$DocumentsListVal['doc_name']}}</option>
                                                @endforeach
                                                @endif

                                        </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="ServicesIncluded">Services Included</label>
                                        <textarea class="form-control ck_editor_txt"  id="ckeditor0" name="service_include" placeholder="Enter Services Included"></textarea> 
                                </div>
                                <div class="form-group">
                                    <label for="ServicesIncluded">Registration process</label>
                                        <textarea class="form-control ck_editor_txt" id="ckeditor1" name="reg_process" placeholder="Enter Registration process"></textarea> 
                                </div>
                                <div class="form-group">
                                    <label for="ServicesIncluded">Estimated timeframe</label>
                                        <textarea class="form-control ck_editor_txt" id="ckeditor2" name="timeframe" placeholder="Enter Estimated timeframe"></textarea> 
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" value="" name="price" class="form-control" id="price" placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" value="" name="discount" class="form-control" id="price" placeholder="Discount">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <select class="form-control" name="status">
                                                <option value="">Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group mb-0 mt-3 justify-content-end">
                                        <div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="submit" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div><!-- COL END -->
                </div><!-- Container closed -->
@endsection

@push('scripts')
{{-- CKEditor CDN --}}
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<script>
    $(document).ready((function() {
        $(".select2").select2({
            placeholder: "Choose one",
            searchInputPlaceholder: "Search"
        }),
        $(".select2-no-search").select2({
            minimumResultsForSearch: 1 / 0,
            placeholder: "Choose one"
        })
    }
    ));
    
    var allEditors = document.querySelectorAll('.ck_editor_txt');
    for (var i = 0; i < allEditors.length; ++i) {
        ClassicEditor.create(allEditors[i]);
    }
</script>
@endpush
