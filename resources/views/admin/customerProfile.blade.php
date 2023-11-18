@extends('layouts.dashboard.dash_master')
@section('css')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
@stop
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
                <h4 class="content-title mb-0 my-auto">users</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ User Profile</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    
<div class="card-body">
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Company</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<!-- Container closed -->
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.uersProfile') }}",
        columns: [
            { data: 'id', name: 'id' },
{ data: 'firstName', name: 'firstName' },
{ data: 'lastName', name: 'lastName' },
{ data: 'email', name: 'email' },
{ data: 'mobile_num', name: 'mobile_num' },
{ data: 'company', name: 'company' },
{ data: 'created_at', name: 'created_at' },
{data: 'action', name: 'action', orderable: false},
        ]
    });
    
  });
</script>
@endpush
