@extends('backend.masterLayout.admin-master')
@section('title')
    লোগো
@endsection

{{-- menu active start --}}
@section('logo', 'menu-open')
@section('activeLogo', 'active')
@section('main-logo', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-7">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">লোগোর তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">সিরিয়াল</th>
                                <th style="width: 20%">ওয়েব সাইটের নাম</th>
                                <th style="width: 20%">লোগো</th>
                                <th style="width: 20%">লোগো স্টেটাস</th>
                                <th style="width: 20%" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = ($logos->currentpage() - 1) * $logos->perpage() + 1;
                        @endphp
                        <tbody>
                            @foreach ($logos as $logo)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $logo->side_name }}</td>
                                    <td><img width="150" src="{{ asset($logo->main_logo) }}" alt="logo logo"></td>
                                    <td>
                                        <span class="badge badge-{{ $logo->status == 1 ? 'success' : 'danger' }}">
                                            {{ $logo->status == 1 ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-primary btn-sm getCouponData"
                                            data-toggle="modal" data-target="#mainLogo{{ $logo->id }}"><i
                                                class="far fa-edit"></i></button>

                                        <a href="{{ url('delete-logo/' . $logo->id) }}" class="btn btn-danger btn-sm"
                                            id="delete"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <!-- modal edit -->
                                <div class="modal fade" id="mainLogo{{ $logo->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="editBrandModal" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title" id="editBrandModal">লোগো ইডিট করুন</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <form role="form" method="POST"
                                                        action="{{ route('insertAndUpdateLogo') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $logo->id }}">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="side_name">ওয়েব সাইটের নাম</label>
                                                                <input type="text"
                                                                    class="form-control  @error('side_name') is-invalid @enderror"
                                                                    id="photoUpload" name="side_name"
                                                                    placeholder="ওয়েব সাইটের নাম দিন"
                                                                    value="{{ $logo->side_name }}">
                                                            </div>
                                                            @error('side_name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label for="main_logo">লোগো ছবি বাছাই</label>
                                                                <input type="file"
                                                                    class="form-control  @error('main_logo') is-invalid @enderror"
                                                                    id="photoUpload" name="main_logo"
                                                                    placeholder="ব্রান্ডের ছবি দিন">
                                                            </div>
                                                            @error('main_logo')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <img id="previewHolder" height="100px"
                                                                src="{{ asset($logo->main_logo) }}"
                                                                alt="main_logo preview">
                                                        </div>
                                                        <!-- /.card-body -->

                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary btn-block">সেভ
                                                                করুন</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex float-right mt-2">
                        {!! $logos->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">লোগো যোগ করুন</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('insertAndUpdateLogo') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="side_name">ওয়েব সাইটের নাম</label>
                                <input type="text" class="form-control  @error('side_name') is-invalid @enderror"
                                    id="photoUpload" name="side_name" placeholder="ওয়েব সাইটের নাম দিন"
                                    value="{{ old('side_name') }}">
                            </div>
                            @error('side_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="main_logo">লোগো ছবি বাছাই</label>
                                <input type="file" class="form-control  @error('main_logo') is-invalid @enderror"
                                    id="photoUpload" name="main_logo" placeholder="ব্রান্ডের ছবি দিন"
                                    value="{{ old('main_logo') }}">
                            </div>
                            @error('main_logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img id="previewHolder" src="" alt="">
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
