@extends('backend.masterLayout.admin-master')

@section('title')
    ব্যবহারকারি
@endsection
{{-- menu active start --}}
@section('user', 'menu-open')
@section('activeUser', 'active')
@section('userList', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">Serial</th>
                                <th>নাম</th>
                                <th>ইমেইল</th>
                                <th>রোল</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $serial = ($users->currentpage() - 1) * $users->perpage() + 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ getUserType($user->id) }}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" data-toggle="modal"
                                            data-target="#editRole{{ $user->id }}"><i
                                                class="fas fa-edit"></i></button>
                                    </td>
                                </tr>

                                {{-- modal edit --}}
                                <div class="modal fade" id="editRole{{ $user->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">ইডিট করুন ব্যবহারকারি</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" action="{{ route('updateUser') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="col-form-label text-md-end">{{ __(' ব্যবহারকারির নাম') }}</label>

                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ $user->name }}" required
                                                            autocomplete="name" autofocus
                                                            placeholder="ব্যবহারকারির নাম দিন">

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email"
                                                            class="col-form-label text-md-end">{{ __('ব্যবহারকারির  ইমেইল') }}</label>

                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ $user->email }}" required
                                                            autocomplete="email" placeholder="ব্যবহারকারির  ইমেইল দিন">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password"
                                                            class="col-form-label text-md-end">{{ __('পাসওয়ার্ড') }}</label>

                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password"
                                                            placeholder="পাসওয়ার্ড দিন">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password-confirm"
                                                            class="col-form-label text-md-end">{{ __('কনফার্ম পাসওয়ার্ড') }}</label>

                                                        <input id="password-confirm" type="password" class="form-control"
                                                            name="password_confirmation" required
                                                            autocomplete="new-password" placeholder="কনফার্ম পাসওয়ার্ড দিন">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="user_role"
                                                            class="col-form-label text-md-end">ব্যবহারকারির রোল</label>
                                                        <select class="form-control select2 select2-danger" id="user_role"
                                                            name="user_role" data-dropdown-css-class="select2-info"
                                                            data-placeholder="রোল বাছাই করুন" style="width: 100%;" required>
                                                            <option selected="selected" value="">Select User Role</option>
                                                            @foreach ($roles as $role)
                                                                <option value="{{ $role->id }}">{{ $role->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary btn-block">
                                                                {{ __('আপডেট') }}
                                                            </button>
                                                        </div>
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
                    <h3 class="card-title">নিবন্ধন করুন ব্যবহারকারি</h3>
                </div>
                <div class="card-body">
                    <!-- form start -->
                    <form method="POST" action="{{ route('registerUser') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-end">{{ __(' ব্যবহারকারির নাম') }}</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="ব্যবহারকারির নাম দিন">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-end">{{ __('ব্যবহারকারির  ইমেইল') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="ব্যবহারকারির  ইমেইল দিন">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-end">{{ __('পাসওয়ার্ড') }}</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="পাসওয়ার্ড দিন">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm"
                                class="col-form-label text-md-end">{{ __('কনফার্ম পাসওয়ার্ড') }}</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="কনফার্ম পাসওয়ার্ড দিন">
                        </div>

                        <div class="form-group">
                            <label for="user_role" class="col-form-label text-md-end">ব্যবহারকারির রোল</label>
                            <select class="form-control select2 select2-danger" id="user_role" name="user_role"
                                data-dropdown-css-class="select2-info" data-placeholder="রোল বাছাই করুন"
                                style="width: 100%;" required>
                                <option selected="selected" value="">Select User Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('নিবন্ধন') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
