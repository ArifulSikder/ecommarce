@extends('backend.masterLayout.admin-master')

@section('title')
    Add Archive
@endsection
{{-- menu active start --}}
@section('rolePermission', 'menu-open')
@section('activerolePermission', 'active')
@section('rolePermissionList', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $role->name }}'s Permissions List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">Serial</th>
                                <th>Permission Name</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $serial = ($rolePermissions->currentpage() - 1) * $rolePermissions->perpage() + 1;
                            @endphp
                            @foreach ($rolePermissions as $rolePermission)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $rolePermission->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
