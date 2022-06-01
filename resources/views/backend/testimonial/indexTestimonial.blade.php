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
                                            <button class="btn btn-primary btn-sm getData" data-toggle="modal"
                                                data-target="#editTestimonial" data-id="{{ $testimonial->id }}"
                                                data-name="{{ $testimonial->name }}"
                                                data-designation="{{ $testimonial->designation }}"
                                                data-description="{{ $testimonial->description }}"
                                                data-photo="{{ $testimonial->photo }}"><i
                                                    class="far fa-edit"></i></button>
                                            <a href="{{ url('testimonial-delete/' . $testimonial->id) }}"
                                                class="btn btn-danger btn-sm" id="delete"><i
                                                    class="far fa-trash-alt"></i></a>
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


    {{-- edit modal --}}
    <div class="modal fade" id="editTestimonial" tabindex="-1" role="dialog" aria-labelledby="editModalCategory"
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
                    <form role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">নাম</label>
                            <input type="text" class="form-control" name="name" placeholder="নাম দিন" value=''
                                id="name_up">
                        </div>
                        <span class="text-danger" id="errorName"></span>


                        <div class="form-group">
                            <label for="designation">পদবি</label>
                            <input type="text" name="designation" class="form-control" placeholder="পদবি দিন" value=''
                                id="designation_up">
                        </div>
                        <span class="text-danger" id="errorDesignation"></span>
                        <div class="form-group">
                            <label for="description">বিবরন</label>
                            <textarea type="text" class="form-control" name="description" placeholder="বিবরন দিন" value=''
                                id="description_up"></textarea>
                        </div>
                        <span class="text-danger" id="errorDescription"></span>
                        <div class="form-group">
                            <label for="photo">ছবি</label>
                            <input type="file" class="form-control" id="photoUpload" name="photo" cols="30" rows="10"
                                placeholder="ছবি দিন" value='{{ old('photo') }}'>
                        </div>
                        <img class="previewHolder" src="" alt="">

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
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
                var name = $(this).data("name");
                var designation = $(this).data("designation");
                var description = $(this).data("description");
                var photo = $(this).data('photo');

                $('#id_up').val(id);
                $('#name_up').val(name);
                $('#designation_up').val(designation);
                $('#description_up').val(description);
                $('.previewHolder').attr('src', photo).css('width', '100px');

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
                            location.reload();
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
@endsection
