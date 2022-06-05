@extends('backend.masterLayout.admin-master')
@section('title')
    Add Archive
@endsection
{{-- menu active start --}}
@section('user', 'menu-open')
@section('activeUser', 'active')
@section('registerUser', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Register User</h3>
                </div>
                <div class="card-body">
                    <!-- form start -->
                    <form method="POST" action="{{ route('registerUser') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-end">{{ __('User Name') }}</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Enter User Name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Enter Email Address">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Enter Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm"
                                class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Enter Confirm Password">
                        </div>

                        <div class="form-group">
                            <label for="user_role" class="col-form-label text-md-end">User Role</label>
                            <select class="form-control select2 select2-danger" id="user_role" name="user_role"
                                data-dropdown-css-class="select2-info" style="width: 100%;" required>
                                <option selected="selected" value="">Select User Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
