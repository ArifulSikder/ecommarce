@extends('backend.masterLayout.admin-master')

@section('title')
    Add Archive
@endsection

{{-- menu active start --}}
@section('roleAndPermission', 'menu-open')
@section('roleAndPermissionActive', 'active')
@section('rolesList', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Roles List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">Serial</th>
                                <th>Roles Name</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $serial = ($roles->currentpage() - 1) * $roles->perpage() + 1;
                            @endphp
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <button class="btn btn-success" data-toggle="modal"
                                            data-target="#editRole{{ $role->id }}"><i
                                                class="fas fa-edit"></i></button>
                                        <a href="{{ url('role-permission-list/' . $role->id) }}"
                                            class="btn btn-primary btn-sm">Show
                                            Permission</a>
                                    </td>
                                </tr>

                                {{-- modal edit --}}
                                <div class="modal fade" id="editRole{{ $role->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Create Role</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <!-- form start -->
                                                <form role="form" action="{{ route('updateRole') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $role->id }}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" id="roleName"
                                                                placeholder="Ex: Admin, Moderator..."
                                                                value="{{ $role->name }}">
                                                        </div>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-block">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Role</h3>
                </div>
                <div class="card-body">
                    <!-- form start -->
                    <form role="form" action="{{ route('create_role') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Ex: Admin, Moderator...">
                            </div>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {
            $("#createRole").on("hidden.bs.modal", function(e) {
                $("#roleName").val("");
            });
        });
    </script>
@endsection
