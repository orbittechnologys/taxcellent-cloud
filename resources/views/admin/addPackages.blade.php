@extends('layouts.dashboard.page_master')

@section('content')
@include('admin.inc.header')

<div class="container-fluid">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Packages</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ User Packages</span>
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
                                    <h4 class="card-title mg-b-0">Add Packages</h4>
                                    <br><br>
                                    
                                </div>
                                <!--<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="#">Learn
                                        more</a></p>-->
                            </div>
                            

                            <div class="card-body pt-0">
                                    <form class="form-horizontal" method="post" action="savepackages">
                                    
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <div class="form-group">
                                            <select class="form-control" name="service_cat_id">
                                                <option value="">Select Service Category</option>
                                                @if($serviceCatAry)
                                                    @foreach($serviceCatAry as $serviceCatVal)
                                                        <option value="{{$serviceCatVal['id']}}">{{$serviceCatVal['cat_name']}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="service_id">
                                                <option value="">Select service</option>
                                                @if($serviceAry)
                                                    @foreach($serviceAry as $serviceVal)
                                                        <option value="{{$serviceVal['id']}}">{{$serviceVal['service_name']}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="text"  name="package_name" class="form-control" placeholder="Packages Name">
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="status">
                                                <option value="">Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
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
@endpush
