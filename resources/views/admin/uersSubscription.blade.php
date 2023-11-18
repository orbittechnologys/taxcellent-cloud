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
                <h4 class="content-title mb-0 my-auto">Users</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ User Subscription</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">User Subscription list</h4>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-lg-10p"><span>User Name</span></th>
                                    <th class="wd-lg-15p"><span>Service Name</span></th>
                                    <th class="wd-lg-10p"><span>Price</span></th>
                                    <th class="wd-lg-10p"><span>Purchase Status</span></th>
                                    <th class="wd-lg-10p"><span>Application Status</span></th>
                                    <th class="wd-lg-10p"><span>Purchase Date</span></th>
                                    <th class="wd-lg-15p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($orderDetails)>0)
                                @foreach($orderDetails as $row)
                                <tr>
                                    @php
                                    $userData=DB::table('users')->where('id','=',$row->user_id)->first();
                                    $fileDetails= DB::table('user_upload_document')->where("user_id", $row->user_id)->first();
                                   $serviceDetails=DB::table('service_category')->where("id", $row->service_cat_id)->first();
                                   $subCategory=DB::table('service')->where("id", $row->service_id)->first();
                                  @endphp
                                  <td>{{isset($userData->firstName) ? ($userData->firstName): 'NA'}} </td>
                                  <td>{{isset($subCategory->service_name) ? ($subCategory->service_name): 'NA'}}</td>
                                  <td>₹ {{$row->price}}</td>
                                  <td>{{$row->payment_status}}</td>
                                  @if($row->order_status==(0))
                                  <td>pending</td>
                                  @elseif($row->order_status==(1))
                                  <td>In Process</td>
                                  @elseif($row->order_status==(2))
                                  <td>Completed</td>
                                  @endif
                                 
                                  <td>{{$row->raz_created_at}}</td>

                                    <td>
                                        <a href="" class="btn btn-sm btn-info btn-b">
                                            <i class="las la-eye"></i>
                                        </a>
                                        <a href="" class="btn btn-sm bg-danger btn-b">
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
