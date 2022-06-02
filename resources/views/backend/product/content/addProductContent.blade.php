@extends('backend.masterLayout.admin-master')
@section('title')
    প্রোডাক্টের কন্টেন যোগ করুন
@endsection

{{-- menu active start --}}
@section('product', 'menu-open')
@section('productActive', 'active')
@section('productList', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">প্রোডাক্টের কন্টেন যোগ করুন</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if ($productContentData == null)
                    <form role="form" method="POST" action="{{ route('storeProductContent') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product_id }}">
                        <div class="form-group">
                            <label for="product_warrenty">প্রোডাক্টের অয়ারেন্টি</label>
                            <input type="text" class="form-control  @error('product_warrenty') is-invalid @enderror"
                                name="product_warrenty" value='{{ old('product_warrenty') }}'
                                placeholder="প্রোডাক্টের অয়ারেন্টি যেমনঃ ২ বছরের অয়ারেন্টি">
                        </div>
                        @error('product_warrenty')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="free_shipping">ফ্রি শিপিং</label>
                            <input type="text" class="form-control  @error('free_shipping') is-invalid @enderror"
                                name="free_shipping" value='{{ old('free_shipping') }}' placeholder="ফ্রি শিপিং">
                        </div>
                        @error('free_shipping')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label>ফাইলের ধরন</label>
                            <select name="file_type" class="form-control select2 @error('file_type') is-invalid @enderror"
                                style=" width:100%;" data-placeholder="ফাইলের ধরন বাছাই করুন">
                                <option selected="selected" value="">ফাইলের ধরন </option>
                                <option value="Image"
                                    {{ collect(old('file_type'))->contains('Image') ? 'selected' : '' }}>
                                    Image</option>
                                <option value="Video"
                                    {{ collect(old('file_type'))->contains('Video') ? 'selected' : '' }}>
                                    Video</option>
                            </select>
                        </div>
                        @error('file_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="content_file">প্রোডাক্টের থাম্বনেল</label>
                            <input type="file" class="form-control  @error('content_file') is-invalid @enderror"
                                id="photoUpload" name="content_file" value='{{ old('content_file') }}'>
                        </div>
                        @error('content_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <img id="previewHolder" src="" alt="">
                        <div class="form-group">
                            <label for="long_description">প্রোডাক্টের বড় বিবরন</label>
                            <textarea class="textarea" name="long_description" id="long_description"
                                placeholder="প্রোডাক্টের বড় বিবরন দিন">{{ old('long_description') }}</textarea>
                        </div>
                        @error('long_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- /.card-body -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
                        </div>
                    </form>
                @else
                    <form role="form" method="POST" action="{{ route('storeProductContent') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product_id }}">
                        <input type="hidden" name="update" value="update">
                        <div class="form-group">
                            <label for="product_warrenty">প্রোডাক্টের অয়ারেন্টি</label>
                            <input type="text" class="form-control  @error('product_warrenty') is-invalid @enderror"
                                name="product_warrenty" value='{{ $productContentData->product_warrenty }}'
                                placeholder="প্রোডাক্টের অয়ারেন্টি যেমনঃ ২ বছরের অয়ারেন্টি">
                        </div>
                        @error('product_warrenty')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="free_shipping">ফ্রি শিপিং</label>
                            <input type="text" class="form-control  @error('free_shipping') is-invalid @enderror"
                                name="free_shipping" value='{{ $productContentData->free_shipping }}'
                                placeholder="ফ্রি শিপিং">
                        </div>
                        @error('free_shipping')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label>ফাইলের ধরন</label>
                            <select name="file_type" class="form-control select2 @error('file_type') is-invalid @enderror"
                                style=" width:100%;" data-placeholder="ফাইলের ধরন বাছাই করুন">
                                <option selected="selected" value="">ফাইলের ধরন </option>
                                <option value="Image" {{ $productContentData->file_type == 'Image' ? 'selected' : '' }}>
                                    Image</option>
                                <option value="Video" {{ $productContentData->file_type == 'Video' ? 'selected' : '' }}>
                                    Video</option>
                            </select>
                        </div>
                        @error('file_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="content_file">প্রোডাক্টের থাম্বনেল</label>
                            <input type="file" class="form-control  @error('content_file') is-invalid @enderror"
                                id="photoUpload" name="content_file" value='{{ $productContentData->content_file }}'>
                        </div>
                        @error('content_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <img id="previewHolder" src="" alt="">
                        <div class="form-group">
                            <label for="long_description">প্রোডাক্টের বড় বিবরন</label>
                            <textarea class="textarea" name="long_description" id="long_description"
                                placeholder="প্রোডাক্টের বড় বিবরন দিন">{{ $productContentData->long_description }}</textarea>
                        </div>
                        @error('long_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- /.card-body -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $(`<span class="pip">
                                    <img class="imageThumb" src="${e.target.result}" title="${file.name}" alt=""> <br>
                                    <span class="remove">Remove Photo</span>
                                </span>`).insertAfter("#files");
                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                            });

                            // Old code here
                            /*$("<img></img>", {
                              class: "imageThumb",
                              src: e.target.result,
                              title: file.name + " | Click to remove"
                            }).insertAfter("#files").click(function(){$(this).remove();});*/

                        });
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#givenSlug").keyup(function(e) {
                var slug = $(this).val();
                $("#product_slug").val(slug.replace(/\s+/g, '-').toLowerCase());
            });
        });
    </script>
    <script>
        //preview image user
        function readURLL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewHolderr').attr('src', '');
                    $('#previewHolderr').attr('src', e.target.result);
                    $('#previewHolderr').css('width', '100px')
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                alert('select a file to see preview');
                $('#previewHolderr').attr('src', '');
            }
        }
        $("#photoUploadd").change(function() {
            readURLL(this);
        });
    </script>
@endsection
