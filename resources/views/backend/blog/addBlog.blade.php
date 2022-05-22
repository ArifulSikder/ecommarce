@extends('backend.masterLayout.admin-master')
@section('title')
    ব্লোগ যোগ করুন
@endsection

{{-- menu active start --}}
@section('blog', 'menu-open')
@section('blogActive', 'active')
@section('addblog', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ব্লোগ যোগ করুন</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form role="form" method="POST" action="{{ route('storeBlog') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="blog_title">ব্লোগ টাইটেল</label>
                        <input type="text" class="form-control  @error('blog_title') is-invalid @enderror" id="blog_title"
                            name="blog_title" placeholder="ব্লোগ টাইটেল দিন" value='{{ old('blog_title') }}'>
                    </div>
                    @error('blog_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label for="blog_slug">ব্লোগ স্লাগ</label>
                        <input type="text" class="form-control  @error('blog_slug') is-invalid @enderror" id="givenSlug"
                            placeholder="ব্লোগ স্লাগ দিন" value='{{ old('blog_slug') }}'>
                    </div>
                    <input type="hidden" name="blog_slug" id="blog_slug">
                    @error('blog_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="writer">লেখক</label>
                        <input type="text" class="form-control  @error('writer') is-invalid @enderror" id="writer"
                            name="writer" placeholder="লেখক দিন" value='{{ old('writer') }}'>
                    </div>
                    @error('writer')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="date">তারিখ</label>
                        <input type="text" class="form-control  @error('date') is-invalid @enderror" id="datepicker"
                            name="date" placeholder="তারিখ দিন" value='{{ old('date') }}'>
                    </div>
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="blog_thumbnail">ব্লোগ থাম্বনেল</label>
                        <input type="file" class="form-control  @error('blog_thumbnail') is-invalid @enderror"
                            id="photoUpload" name="blog_thumbnail" placeholder="ব্লোগ থাম্বনেল দিন"
                            value='{{ old('blog_thumbnail') }}'>
                    </div>
                    @error('date')
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
    </div>
    <!-- /.row -->

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#givenSlug").keyup(function(e) {
                var slug = $(this).val();
                $("#blog_slug").val(slug.replace(/\s+/g, '-').toLowerCase());
            });
        });
    </script>
@endsection
