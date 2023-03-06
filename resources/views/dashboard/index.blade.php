@extends('layout.base')

@section('action')
<button class="btn btn-primary btn-sm">Download Excel</button>
@endsection

@section('content')
<div class="container-fluid" id="dashboard-existing">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-active-tab" data-toggle="pill" href="#pills-active" role="tab" aria-controls="pills-active" aria-selected="true">Active</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" id="pills-waiting-tab" data-toggle="pill" href="#pills-waiting" role="tab" aria-controls="pills-waiting" aria-selected="false">Waiting</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pills-pipeline-tab" data-toggle="pill" href="#pills-pipeline" role="tab" aria-controls="pills-pipeline" aria-selected="false">Pipeline</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pills-completed-tab" data-toggle="pill" href="#pills-completed" role="tab" aria-controls="pills-completed" aria-selected="false">Completed</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pills-canceled-tab" data-toggle="pill" href="#pills-canceled" role="tab" aria-controls="pills-canceled" aria-selected="false">Canceled</a>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ticket Name</th>
                                <th>Status</th>
                                <th>Last Progress</th>
                                <th>Created</th>
                                <th>Recruiter</th>
                                <th>SLA Total</th>
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
                                <th>No</th>
                                <th>Ticket Name</th>
                                <th>Status</th>
                                <th>Last Progress</th>
                                <th>Created</th>
                                <th>Recruiter</th>
                                <th>SLA Total</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="pills-pipeline" role="tabpanel" aria-labelledby="pills-pipeline-tab">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ticket Name</th>
                                <th>Status</th>
                                <th>Last Progress</th>
                                <th>Created</th>
                                <th>Recruiter</th>
                                <th>SLA Total</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-completed" role="tabpanel" aria-labelledby="pills-completed-tab">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ticket Name</th>
                                <th>Status</th>
                                <th>Last Progress</th>
                                <th>Created</th>
                                <th>Recruiter</th>
                                <th>SLA Total</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-canceled" role="tabpanel" aria-labelledby="pills-canceled-tab">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ticket Name</th>
                                <th>Status</th>
                                <th>Last Progress</th>
                                <th>Created</th>
                                <th>Recruiter</th>
                                <th>SLA Total</th>
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