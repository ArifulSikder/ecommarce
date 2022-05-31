@extends('backend.masterLayout.admin-master')
@section('title')
    প্রোডাক্ট
@endsection

{{-- menu active start --}}
@section('blog', 'menu-open')
@section('blogActive', 'active')
@section('blogs-list', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">প্রোডাক্টের তালিকা</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5%">সিরিয়াল</th>
                            <th style="width: 20%">ব্লোগ থাম্বনেল</th>
                            <th style="width: 10%">লেখক </th>
                            <th style="width: 15%"> তারিখ নাম</th>
                            <th style="width: 20%">শিরোনাম নাম</th>
                            <th style="width: 10%" class="text-center">আকশন</th>
                        </tr>
                    </thead>
                    @php
                        $serial = ($blogs->currentpage() - 1) * $blogs->perpage() + 1;
                    @endphp
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td><img src="{{ asset($blog->blog_thumbnail) }}" width="100px" alt="blog Thumbnail">
                                </td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->blog_slug }}</td>
                                <td>{{ $blog->writer }}</td>
                                <td>{{ dateFormater($blog->date) }}</td>

                                <td class="text-center">
                                    <a href="{{ url('blog-edit/' . $blog->id) }}" class="btn btn-primary btn-sm"><i
                                            class="far fa-edit"></i></a>
                                    <a href="{{ url('product-delete/' . $blog->id) }}" class="btn btn-danger btn-sm"
                                        id="delete"><i class="far fa-trash-alt"></i></a>
                                    <a href="{{ url('product-view/' . $blog->id) }}" class="btn btn-success btn-sm"><i
                                            class="far fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
