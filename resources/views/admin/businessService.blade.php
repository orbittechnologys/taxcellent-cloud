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
                <h4 class="content-title mb-0 my-auto"> Business Registration</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0"> Business Registration list</h4>
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
                                    <th class="wd-lg-20p"><span>Documnets uploaded</span></th>
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
                                   @if(Str::contains($serviceDetails->cat_name, 'Business Registration'))
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
                                    
                                    <td>Uploaded 2/5</td>
                                    <td>{{$row->raz_created_at}}</td>
                                    <td>
                                        {{-- <span class="gstin_attachment_prev">
                                            @if((isset($fileDetails->doc_path) ? ($fileDetails->doc_path): 'NA'))
                                            <a target="popup" onclick="window.open('/uploads/{{isset($fileDetails->doc_path) ? ($fileDetails->doc_path): 'NA'}}','name','width=600,height=400')"> 
                                                <button type="button" class="btn btn-sm btn-info btn-b">
                                                    <i class="las la-eye"></i>
                                                </button>
                                            </a>
                                            
                                             @endif
                                        </span> --}}
                                        <a href="{{route('admin.businessServiceDetails',[$row->user_id,$row->service_id])}}" class="btn btn-sm btn-info btn-b">
                                            <i class="las la-eye"></i>
                                        </a>  
                                        <a href="" class="btn btn-sm bg-danger btn-b">
                                            <i class="las la-trash"></i>
                                        </a>   
                                    </td>
                                    
                                    @endif
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
