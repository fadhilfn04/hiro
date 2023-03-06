@extends('layout.base')

@section('action')

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
                        <th>Directorate</th>
                        <th>Grade</th>
                        <th>Creator</th>
                        <th>Candidate List</th>
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