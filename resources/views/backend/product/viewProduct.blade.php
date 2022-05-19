@extends('backend.masterLayout.admin-master')
@section('title')
    ক্যাটেগরি
@endsection

{{-- menu active start --}}
@section('product', 'menu-open')
@section('productActive', 'active')
@section('productList', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">প্রোডাক্টের অন্যান্য তথ্য</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <p><strong>প্রোডাক্টের ছোট বিবরন :</strong> {!! $productData->short_description !!}</p>
                    <p><strong>প্রোডাক্টের বড় বিবরন :</strong> {!! $productData->long_description !!}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">প্রোডাক্টের অন্যান্য ছবির তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 5%">সিরিয়াল</th>
                                <th style="width: 10%">প্রোডাক্টের অন্যান্য ছবির</th>
                                <th style="width: 10%" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = ($productMultipleImg->currentpage() - 1) * $productMultipleImg->perpage() + 1;
                        @endphp
                        <tbody>
                            @foreach ($productMultipleImg as $otherImage)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td><img src="{{ asset($otherImage->multiple_image) }}" width="100px"
                                            alt="other Thumbnail">
                                    </td>
                                    <td class="text-center">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#imageEdit{{ $otherImage->id }}">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <a href="{{ url('product-image-delete/' . $otherImage->id) }}"
                                            class="btn btn-danger btn-sm" id="delete"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="imageEdit{{ $otherImage->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="imageEditModal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imageEditModal">Update Image</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('image-update') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $otherImage->id }}">
                                                    <div class="form-group">
                                                        <label for="multiple_image">ছবি </label>
                                                        <input type="file" name="multiple_image" id="multiple_image">
                                                        <img width="100px" src="{{ asset($otherImage->multiple_image) }}"
                                                            alt="multiple_image">
                                                    </div>
                                                    @error('multiple_image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                    <button class="btn btn-success btn-block" type="submit">Update</button>
                                                </form>
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
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Modal -->
@endsection
