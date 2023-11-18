@extends('layouts.dashboard.page_master')

@section('content')
@include('admin.inc.header')

<div class="container-fluid">
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
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
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">Packages list</h4>
                                    <a href="addPackages" style="float: right" title="Add Service"><button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button></a>
                                </div>
                                
                                <!--<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="#">Learn
                                        more</a></p>-->
                            </div>






                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="wd-lg-20p"><span>Service Category</span></th>
                                                <th class="wd-lg-20p"><span>Service Name</span></th>
                                                <th class="wd-lg-20p"><span>Package Name</span></th>
                                                <th class="wd-lg-10p"><span>Status</span></th>
                                                <th class="wd-lg-15p"><span>Created Date</span></th>
                                                <th class="wd-lg-15p">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($packagesAry)
                                            @foreach($packagesAry as $packagesVal)
                                            <tr>
                                                
                                                <td>{{$packagesVal['service_category']['cat_name']}}</td>
                                                <td>{{$packagesVal['service_name']['service_name']}}</td>
                                                <td>{{$packagesVal['package_name']}}</td>
                                                
                                                <td>
                                                    @if($packagesVal['status']==1)
                                                    <span class="label text-success d-flex">
                                                        <div class="bg-success me-1"></div>Active
                                                    </span>
                                                    @else
                                                    <span class="label text-danger d-flex">
                                                        <div class="bg-danger me-1"></div> Inactive
                                                    </span>
                                                    @endif
                                                    
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($packagesVal['created_at'])->format('Y-m-d')}}</td>
                                                <td>
                                                    <a href="editpackages/{{$packagesVal['id']}}" class="btn btn-sm btn-info btn-b">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete?')" href="deletepackages/{{$packagesVal['id']}}" class="btn btn-sm btn-danger">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                @endforeach
                                            @endif
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>





                            
                        </div>
                    </div><!-- COL END -->
                </div><!-- Container closed -->
@endsection

@push('scripts')
@endpush
