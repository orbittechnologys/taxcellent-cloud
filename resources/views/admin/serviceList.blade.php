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
                <h4 class="content-title mb-0 my-auto">Services</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ User Services</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    
<div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">Services list</h4>
                                    <a href="addService" style="float: right" title="Add Service"><button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button></a>
                                </div>
                                
                                <!--<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="#">Learn
                                        more</a></p>-->
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="wd-lg-10p"><span>Category Name</span></th>
                                                <th class="wd-lg-15p"><span>Service Name</span></th>
                                                <th class="wd-lg-50p"><span>service include</span></th>
                                                <th class="wd-lg-50p"><span>Registration process</span></th>
                                                <th class="wd-lg-10p"><span>Estimated timeframe</span></th>
                                                <th class="wd-lg-5p"><span>Price</span></th>
                                                <th class="wd-lg-5p"><span>Discount</span></th>
                                                <th class="wd-lg-5p"><span>Status</span></th>
                                                <th class="wd-lg-5p"><span>Created Date</span></th>
                                                <th class="wd-lg-5p">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($serviceAry)
                                            @foreach($serviceAry as $serviceAryVal)
                                            <tr>
                                                
                                                <td>{{($serviceAryVal['service_category']) ? $serviceAryVal['service_category']['cat_name'] : ""}}</td>
                                                <td>{{$serviceAryVal['service_name']}}</td>
                                                <td>
                                                {!! html_entity_decode($serviceAryVal['service_include']) !!}
                                                </td>
                                                <td>
                                                {!! html_entity_decode($serviceAryVal['reg_process']) !!}
                                                </td>
                                                <td>
                                                {!! html_entity_decode($serviceAryVal['timeframe']) !!}
                                                </td>

                                                <td>{{$serviceAryVal['price']}}</td>
                                                <td>{{$serviceAryVal['discount']}}</td>
                                                <td>
                                                    @if($serviceAryVal['status']==1)
                                                    <span class="label text-success d-flex">
                                                        <div class=" bg-success me-1"></div>Active
                                                    </span>
                                                    @else
                                                    <span class="label text-danger d-flex">
                                                        <div class=" bg-danger me-1"></div> Inactive
                                                    </span>
                                                    @endif
                                                    
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($serviceAryVal['created_at'])->format('Y-m-d')}}</td>
                                                <td>
                                                    <a href="editservice/{{$serviceAryVal['id']}}" class="btn btn-sm btn-info btn-b">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete?')" href="deleteservice/{{$serviceAryVal['id']}}" class="btn btn-sm btn-danger">
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
