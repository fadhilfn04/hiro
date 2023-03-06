@extends('layout.base')

@section('action')
<button class="btn btn-success btn-sm">Export Excel</button>
@endsection

@section('content')
<div class="container-fluid" id="dashboard-existing">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Division</th>
                        <th>Group</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('.datatable').DataTable({})
</script>
@endsection