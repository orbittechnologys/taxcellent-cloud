@extends('layouts.dashboard.page_master')

@section('content')
@include('admin.inc.header')

<br>
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
                <h4 class="content-title mb-0 my-auto">Services category</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ User Services category</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    
<div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">Services category list</h4>
                                    <a href="addServiceCategory" style="float: right" title="Add service Category"><button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button></a>    
                                </div>
                                
                                <!--<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="#">Learn
                                        more</a></p>-->
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="wd-lg-70p"><b>Service Category Name</b></th>
                                                <th class="wd-lg-20p"><b>Created Date</b></th>
                                                <th class="wd-lg-10p"><b>Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($serviceCategoryAry)
                                            @foreach($serviceCategoryAry as $serviceCategoryVal)
                                            <tr>
                                                
                                                <td>{{$serviceCategoryVal['cat_name']}}</td>
                                                <td>{{ \Carbon\Carbon::parse($serviceCategoryVal['created_date'])->format('Y-m-d')}}</td>
                                                <td>
                                                    <a href="editservicecategory/{{$serviceCategoryVal['id']}}" class="btn btn-sm btn-info btn-b">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                    <a  onclick="return confirm('Are you sure you want to delete?')" href="deleteservicecategory/{{$serviceCategoryVal['id']}}" class="btn btn-sm btn-danger">
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

                                                           </tbody>
                                    </table>
                                </div>
                                <!--<ul class="pagination mt-4 mb-0 float-end">
                                    <li class="page-item page-prev disabled">
                                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item page-next">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>-->
                            </div>
                        </div>
                    </div><!-- COL END -->
                </div><!-- Container closed -->
@endsection

@push('scripts')
@endpush
