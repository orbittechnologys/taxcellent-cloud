@extends('layouts.dashboard.page_master')

@section('content')
@include('admin.inc.header')

<div class="container-fluid">

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
                                    <h4 class="card-title mg-b-0">Add Services Category</h4>
                                    <br><br>
                                    
                                </div>
                                <!--<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="#">Learn
                                        more</a></p>-->
                            </div>
                            

                            <div class="card-body pt-0">
                                <form class="form-horizontal" method="post" action="saveservicecategory">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group">
                                    <label for="CategoryDesc">Category Name</label>
                                        <input type="text" value="" name="cat_name" class="form-control" id="cat_name" placeholder="Services category Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="CategoryTitle">Category Title</label>
                                        <textarea class="form-control"  id="cat_title" name="cat_title" placeholder="Enter Category Title"></textarea> 
                                    </div>
                                    <div class="form-group">
                                        <label for="CategoryDesc">Category Description</label>
                                        <textarea class="form-control"  id="cat_desc" name="cat_desc" placeholder="Enter Category Description"></textarea> 
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
        ClassicEditor
            .create( document.querySelector( '#cat_title' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush
