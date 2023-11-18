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
                <h4 class="content-title mb-0 my-auto">Documents List</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0"></span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    
<div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">Documents List</h4>
                                    <a href="addDocument" style="float: right" title="Add Document"><button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button></a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="wd-lg-10p"><span>Category Name</span></th>
                                                <th class="wd-lg-5p"><span>Created Date</span></th>
                                                <th class="wd-lg-5p">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($docData)
                                            @foreach($docData as $docDataVal)
                                            <tr>
                                                <td>{{$docDataVal['doc_name']}}</td>
                                                <td>{{ \Carbon\Carbon::parse($docDataVal['created_at'])->format('Y-m-d')}}</td>
                                                <td>
                                                    <a href="editDocument/{{$docDataVal['id']}}" class="btn btn-sm btn-info btn-b">
                                                        <i class="las la-pen"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete?')" href="deleteDocument/{{$docDataVal['id']}}" class="btn btn-sm btn-danger">
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
