@extends('layout.base')

@section('action')
<a href="{{ route('ticket.new_request') }}" class="btn btn-success btn-sm">
    Download Report
</a>
@endsection

@section('content')
<div class="container-fluid" id="dashboard-existing">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-active-tab" data-toggle="pill" href="#pills-active" role="tab" aria-controls="pills-active" aria-selected="true">Sourcing</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" id="pills-waiting-tab" data-toggle="pill" href="#pills-waiting" role="tab" aria-controls="pills-waiting" aria-selected="false">CV Review</a>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Ticket</th>
                                <th>Directorate</th>
                                <th>Grade</th>
                                <th>Creator</th>
                                <th>Sourcing & Submit Candidate</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="pills-waiting" role="tabpanel" aria-labelledby="pills-waiting-tab">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Ticket Name</th>
                                <th>Directorate</th>
                                <th>Grade</th>
                                <th>CV Review</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('.datatable').DataTable({})
</script>
@endsection