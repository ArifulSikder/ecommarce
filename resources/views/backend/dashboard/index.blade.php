@extends('backend.masterLayout.admin-master')
@section('title')
    Dashboard
@endsection

{{-- menu active start --}}
@section('dashboard', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="width: auto;">
                        <div class="card-title">
                            <h2>
                                Donor Infornation
                            </h2>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Donor Name</li>
                            <li class="list-group-item">Number</li>
                            <li class="list-group-item">Blood Group</li>
                            <li class="list-group-item">Blood Group</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="width: auto;">
                        <div class="card-header">
                            Donor Infornation
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Donor Name</li>
                            <li class="list-group-item">Number</li>
                            <li class="list-group-item">Blood Group</li>
                            <li class="list-group-item">Blood Group</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->


        </div>
    </div>

@endsection
