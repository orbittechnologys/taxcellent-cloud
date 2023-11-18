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
                <h4 class="content-title mb-0 my-auto">My Subscription</h4>
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
                        <h4 class="card-title mg-b-0">All Subscription list</h4>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-lg-10p"><span>Category Name</span></th>
                                    <th class="wd-lg-15p"><span>Service Name</span></th>
                                    <th class="wd-lg-5p"><span>Price</span></th>
                                    <th class="wd-lg-5p"><span>Discount</span></th>
                                    <th class="wd-lg-5p"><span>Application Status</span></th>
                                    <th class="wd-lg-5p"><span>Purchased Date</span></th>
                                    <th class="wd-lg-5p"><span>Payment Status</span></th>
                                    <th class="wd-lg-5p">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody> 
                                @if(count($orderDetails)>0)
                                @foreach($orderDetails as $row)
                                <tr>
                                    @php
                                     $serviceDetails=DB::table('service_category')->where("id", $row->service_cat_id)->first();
                                     $subCategory=DB::table('service')->where("id", $row->service_id)->first();
                                     $fileDetails= DB::table('user_upload_document')->where("user_id", $row->user_id)->first();
                                    @endphp
                                    <td>{{$serviceDetails->cat_name}}</td>
                                    <td>{{$subCategory->service_name}}</td>
                                    <td>₹ {{$row->price}}</td>
                                    <td>₹ 0</td>
                                    @if($row->order_status==(0))
                                    <td>pending</td>
                                    @elseif($row->order_status==(1))
                                    <td>In Process</td>
                                    @elseif($row->order_status==(2))
                                    <td>Completed</td>
                                    @endif
                                    <td>{{$row->raz_created_at}}</td>
                                    <td>{{$row->payment_status}}</td>
                                    {{-- @if($row->order_status==(0))
                                    <td>
                                       
                                        <span class="gstin_attachment_prev">
                                            @if((isset($fileDetails->final_doc) ? ($fileDetails->final_doc): 'NA'))
                                            <a target="popup" onclick="window.open('/uploads/{{isset($fileDetails->final_doc) ? ($fileDetails->final_doc): 'NA'}}','name','width=600,height=400')"> 
                                                <button type="button" class="btn btn-sm btn-info btn-b">
                                                    <i class="las la-eye"></i>
                                                </button>
                                            </a>
                                            <a href="/uploads/{{$fileDetails->final_doc}}" download="{{$fileDetails->final_doc}}" type="button">
                                                <button type="button" class="btn btn-sm btn-info btn-b">
                                                    <i class="las la-download"></i>
                                                </button>
                                            </a>
                                            @endif
                                           
                                             
                                        </span>
                                    </td>
                                    @else --}}
                                    <td>
                                        
                                        <button type="button" class="btn btn-sm btn-info btn-b" >
                                            <i class="las la-eye"></i>
                                        </button>
                                        
                                    </td>
                                    
                                </tr>
                                {{-- @endif --}}
                                @endforeach
                                @endif
                               
                                
                            </tbody>
                        </table>
                    </div>
                </div>


                
            </div>
        </div><!-- COL END -->
    </div>
    <!-- Row closed -->
</div>
<!-- Container closed -->
@endsection

@push('scripts')

@endpush