@extends('backend.masterLayout.admin-master')
@section('title')
    ব্রান্ড
@endsection

{{-- menu active start --}}
@section('brand', 'menu-open')
@section('activeBrand', 'active')
@section('brand-list', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-7">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ব্রান্ডের তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">সিরিয়াল</th>
                                <th style="width: 20%">ব্রান্ডের ছবি</th>
                                <th style="width: 20%">ব্রান্ডের স্টেটাস</th>
                                <th style="width: 20%" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = ($brands->currentpage() - 1) * $brands->perpage() + 1;
                        @endphp
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td><img width="150" src="{{ asset($brand->brand_image) }}" alt="brand logo"></td>
                                    <td>
                                        <span class="badge badge-{{ $brand->status == 1 ? 'success' : 'danger' }}">
                                            {{ $brand->status == 1 ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-primary btn-sm getCouponData"
                                            data-toggle="modal" data-target="#brandEdit{{ $brand->id }}"><i
                                                class="far fa-edit"></i></button>

                                        <a href="{{ url('delete-brand/' . $brand->id) }}" class="btn btn-danger btn-sm"
                                            id="delete"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <!-- modal edit -->
                                <div class="modal fade" id="brandEdit{{ $brand->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="editBrandModal" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title" id="editBrandModal">ব্রান্ড ইডিট করুন</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <form role="form" method="POST" action="{{ route('updateBrand') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $brand->id }}">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="brand_image">ব্রান্ডের ছবি বাছাই</label>
                                                                <input type="file"
                                                                    class="form-control  @error('brand_image') is-invalid @enderror"
                                                                    id="photoUpload" name="brand_image"
                                                                    placeholder="ব্রান্ডের ছবি দিন">
                                                            </div>
                                                            @error('brand_image')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <img id="previewHolder" height="100px"
                                                                src="{{ asset($brand->brand_image) }}"
                                                                alt="brand_image preview">
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
                        {!! $brands->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ব্রান্ডের যোগ করুন</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('storeBrand') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="brand_image">ব্রান্ডের ছবি বাছাই</label>
                                <input type="file" class="form-control  @error('brand_image') is-invalid @enderror"
                                    id="photoUpload" name="brand_image" placeholder="ব্রান্ডের ছবি দিন"
                                    value="{{ old('brand_image') }}">
                            </div>
                            @error('brand_image')
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
