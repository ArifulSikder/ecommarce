@extends('backend.masterLayout.admin-master')
@section('title')
    প্রশংসাপত্র
@endsection

{{-- menu active start --}}
@section('testimonial', 'menu-open')
@section('testimonialActive', 'active')
@section('indexTestimonial', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-8">
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">প্রশংসাপত্রের তালিকা</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 2%">সিরিয়াল</th>
                                    <th style="width: 10%">ছবি</th>
                                    <th style="width: 10%">নাম </th>
                                    <th style="width: 10%"> পদবি</th>
                                    <th style="width: 10%"> বিবরন</th>
                                    <th style="width: 10%" class="text-center">আকশন</th>
                                </tr>
                            </thead>
                            @php
                                $serial = ($testimonials->currentpage() - 1) * $testimonials->perpage() + 1;
                            @endphp
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $serial++ }}</td>
                                        <td><img src="{{ asset($testimonial->photo) }}" width="100px"
                                                alt="Product Thumbnail">
                                        </td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->designation }}</td>
                                        <td>{{ $testimonial->description }}</td>

                                        <td class="text-center">
                                            <a href="{{ url('product-edit/' . $testimonial->id) }}"
                                                class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                            <a href="{{ url('testimonial-delete/' . $testimonial->id) }}"
                                                class="btn btn-danger btn-sm" id="delete"><i
                                                    class="far fa-trash-alt"></i></a>
                                            <a href="{{ url('testimonial-view/' . $testimonial->id) }}"
                                                class="btn btn-success btn-sm"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="col-md-4">
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">প্রশংসাপত্রের যোগ করুন</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" method="POST" action="{{ route('testimonialStore') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">নাম</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                                    placeholder="নাম দিন" value='{{ old('name') }}'>
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="designation">পদবি</label>
                                <input type="text" name="designation"
                                    class="form-control  @error('designation') is-invalid @enderror" placeholder="পদবি দিন"
                                    value='{{ old('designation') }}'>
                            </div>
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="description">বিবরন</label>
                                <textarea type="text" class="form-control  @error('description') is-invalid @enderror" name="description"
                                    placeholder="বিবরন দিন" value='{{ old('description') }}'></textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="photo">ছবি</label>
                                <input type="file" class="form-control  @error('photo') is-invalid @enderror"
                                    id="photoUpload" name="photo" cols="30" rows="10" placeholder="ছবি দিন"
                                    value='{{ old('photo') }}'>
                            </div>
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img id="previewHolder" src="" alt="">
                            <!-- /.card-body -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
                            </div>
                        </form>
                    </div>
                </div>
                </table>
            </div>
        </div>
    </div>
@endsection
