@extends('backend.masterLayout.admin-master')
@section('title')
    ক্যাটেগরি
@endsection

{{-- menu active start --}}
@section('category', 'menu-open')
@section('categoryActive', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-7">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ক্যাটেগরির তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">সিরিয়াল</th>
                                <th style="width: 20%">ক্যাটেগরির ছবি</th>
                                <th style="width: 20%">ক্যাটেগরির নাম</th>
                                <th style="width: 15%">ক্যাটেগরির সাজান</th>
                                <th style="width: 15%">ক্যাটেগরির আইকন</th>
                                <th style="width: 20%" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = ($categories->currentpage() - 1) * $categories->perpage() + 1;
                        @endphp
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td><img width="100px" src="{{ asset($category->category_thumbnail) }}" alt=""></td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->category_status }}</td>
                                    <td>{!! $category->category_icon !!}</td>
                                    <td class="text-center">
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-primary btn-sm getData" data-toggle="modal"
                                            data-target="#categoryEdit" data-id="{{ $category->id }}"
                                            data-category="{{ $category->category_name }}"
                                            data-icon="{{ $category->category_icon }}" data-slug="{{ $category->slug }}"
                                            data-thumbnail="{{ asset($category->category_thumbnail) }}"
                                            data-status="{{ $category->category_status }}"><i
                                                class="far fa-edit"></i></button>

                                        <a href="{{ url('category/' . $category->id) }}}}" class="btn btn-danger btn-sm"
                                            id="delete"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ক্যাটেগরি যোগ করুন</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('storeCategory') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category">ক্যাটেগরির নাম</label>
                                <input type="text" class="form-control  @error('category_name') is-invalid @enderror"
                                    id="category" name="category_name" placeholder="ক্যাটেগরির নাম দিন"
                                    value="{{ old('category_name') }}">
                            </div>
                            @error('category_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="slug">ক্যাটেগরির স্লাগ(English) </label>
                                <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug"
                                    name="slug" placeholder="ক্যাটেগরির নাম দিন" value="{{ old('slug') }}">
                            </div>
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="category_icon">ক্যাটেগরির আইকন</label>
                                <input type="text" class="form-control  @error('category_icon') is-invalid @enderror"
                                    id="categoryIcon" name="category_icon" placeholder="ক্যাটেগরির আইকন দিন"
                                    value="{{ old('category_icon') }}">
                            </div>
                            @error('category_icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="category_status">ক্যাটেগরির স্থাপন করুন</label>

                                <select name="category_status"
                                    class="form-control select2  @error('category_status') is-invalid @enderror"
                                    style="width: 100%;" data-placeholder="ক্যাটেগরির স্থাপন করুন">
                                    <option selected="selected" value="">ক্যাটেগরির স্থাপন করুন</option>
                                    <option value="1"
                                        {{ collect(old('category_status'))->contains('1') ? 'selected' : '' }}>জনপ্রিয়
                                        ক্যাটেগরিতে যোগ করুন
                                    </option>
                                    <option value="2"
                                        {{ collect(old('category_status'))->contains('2') ? 'selected' : '' }}> ন্যাভবারে
                                        যোগ করুন
                                    </option>
                                </select>
                            </div>
                            @error('category_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="category_thumbnail">ক্যাটেগরির ছবি</label>
                                <input id="photoUpload" type="file"
                                    class="form-control  @error('category_thumbnail') is-invalid @enderror"
                                    name="category_thumbnail" value="{{ old('category_thumbnail') }}">
                            </div>
                            @error('category_thumbnail')
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
    <!-- /.row -->
    <div class="modal fade" id="categoryEdit" tabindex="-1" role="dialog" aria-labelledby="editModalCategory"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="editModalCategory">ক্যাটেগরি ইডিট করুন</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" id="EditForm" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="idUpdate" value="">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category">ক্যাটেগরির নাম</label>
                                <input type="text" class="form-control  @error('category_name') is-invalid @enderror"
                                    id="category_name" name="category_name" placeholder="ক্যাটেগরির নাম দিন" required
                                    value="">
                            </div>
                            <span class="text-danger" id="nameError"></span>


                            <div class="form-group">
                                <label for="slug">ক্যাটেগরির স্লাগ(English) </label>
                                <input type="text" class="form-control  @error('slug') is-invalid @enderror"
                                    id="category_slug" name="slug" placeholder="ক্যাটেগরির নাম দিন"
                                    value="{{ old('slug') }}" value="">
                            </div>
                            <span class="text-danger" id="slugError"></span>
                            <div class="form-group">
                                <label for="category_icon">ক্যাটেগরির আইকন</label>
                                <input type="text" class="form-control  @error('category_icon') is-invalid @enderror"
                                    id="category_icon" name="category_icon" placeholder="ক্যাটেগরির আইকন দিন" value="">
                            </div>
                            <span class="text-danger" id="iconError"></span>

                            <div class="form-group">
                                <label for="category_status">ক্যাটেগরির স্থাপন করুন</label>

                                <select name="category_status" id="category_status"
                                    class="form-control select2  @error('category_status') is-invalid @enderror"
                                    style="width: 100%;" data-placeholder="ক্যাটেগরির স্থাপন করুন">
                                    <option selected="selected" value="">ক্যাটেগরির স্থাপন করুন</option>
                                    <option value="1"
                                        {{ collect(old('category_status'))->contains('1') ? 'selected' : '' }}>জনপ্রিয়
                                        ক্যাটেগরিতে যোগ করুন
                                    </option>
                                    <option value="2"
                                        {{ collect(old('category_status'))->contains('2') ? 'selected' : '' }}> ন্যাভবারে
                                        যোগ করুন
                                    </option>
                                </select>
                            </div>

                            <span class="text-danger" id="categoryStatusError"></span>

                            <div class="form-group">
                                <label for="category_thumbnail">ক্যাটেগরির ছবি</label>
                                <input type="file"
                                    class="form-control photoUpload @error('category_thumbnail') is-invalid @enderror"
                                    name="category_thumbnail" value="">
                            </div>
                            <img class="previewHolder" src="" alt="">
                            <span class="text-danger" id="thumbnailError"></span>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" id="submitBtn" class="btn btn-primary btn-block">আপডেট করুন</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.getData').click(function() {
                var id = $(this).data("id");
                var category = $(this).data("category");
                var icon = $(this).data("icon");
                var slug = $(this).data("slug");
                var thumbnail = $(this).data('thumbnail');
                var status = $(this).data("status");

                $('#idUpdate').val(id);
                $('#category_name').val(category);
                $('#category_icon').val(icon);
                $('#category_slug').val(slug);
                $('#category_status').val(status);
                $('.previewHolder').attr('src', thumbnail).css('width', '100px');

            })
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#EditForm").on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData($("#EditForm")[0]);
                $.ajax({
                    type: "POST",
                    url: "{{ route('updateCategory') }}",
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status == 0) {
                            $.each(response, function(index, value) {
                                $("#slugError").text(value.category_slug);
                                $("#nameError").text(value.category_name);
                                $("#iconError").text(value.category_icon);
                            });

                        } else if (response[0].status == 1) {
                            toastr.success(response[0].success);
                            $("#EditForm")[0].reset();
                            $('#categoryEdit').modal('hide');
                            // $(".table").load(location.href + " .table");

                        } else if (response[0].status == 2) {
                            toastr.success(response[0].error);
                        }
                    },
                    error: function(error) {
                        if (response[0].category_slug[0]) {
                            $("#slugError").text(response[0].category_slug[0]);
                        } else if (response[0].category_name) {
                            $("#nameError").text(response[0].category_name[0]);
                        } else if (response.category_icon) {
                            $("#iconError").text(response[0].category_icon[0]);
                        }
                    }
                });
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {

            $('#submitBtn').click(function(e) {
                e.preventDefault();
                var id = $("#idUpdate").val();
                var category_name = $("#category_name").val();
                var category_slug = $("#category_slug").val();
                var category_icon = $("#category_icon").val();
                var category_status = $("#category_status").val();


                var file_data = $('.photoUpload').prop("files")[0];
                var formData = new FormData();
                formData.append('category_thumbnail', file_data);
                formData.append('id', id);
                formData.append('category_name', category_name);
                formData.append('category_slug', category_slug);
                formData.append('category_icon', category_icon);
                formData.append('category_status', category_status);
                $.ajax({
                    type: "POST",
                    url: "{{ route('updateCategory') }}",
                    dataType: "json",
                    cache: false,
                    processData: false,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status == 0) {
                            $.each(response, function(index, value) {
                                $("#slugError").text(value.category_slug);
                                $("#nameError").text(value.category_name);
                                $("#iconError").text(value.category_icon);
                            });

                        } else if (response[0].status == 1) {
                            toastr.success(response[0].success);
                            $("#EditForm")[0].reset();
                            $('#categoryEdit').modal('hide');
                            // $(".table").load(location.href + " .table");

                        } else if (response[0].status == 2) {
                            toastr.success(response[0].error);
                        }
                    },
                    error: function(error) {
                        if (response[0].category_slug[0]) {
                            $("#slugError").text(response[0].category_slug[0]);
                        } else if (response[0].category_name) {
                            $("#nameError").text(response[0].category_name[0]);
                        } else if (response.category_icon) {
                            $("#iconError").text(response[0].category_icon[0]);
                        }
                    }
                });
            });
        });
    </script> --}}
@endsection
