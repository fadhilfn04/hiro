@extends('layout.base')

@section('action')
<a href="{{ route('ticket.new_request') }}" class="btn btn-primary btn-sm">
    New Request
</a>
@endsection

@section('content')
<div class="container-fluid" id="dashboard-existing">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ticket Name</th>
                        <th>Created Date</th>
                        <th>Grade</th>
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