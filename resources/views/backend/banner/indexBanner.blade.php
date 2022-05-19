@extends('backend.masterLayout.admin-master')
@section('title')
    ব্যানার
@endsection

{{-- menu active start --}}
@section('banner', 'menu-open')
@section('bannerActive', 'active')
@section('banner', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div>
        <div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ব্যানার তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 5%">সিরিয়াল</th>
                                <th style="width: 20%">ব্যানারের ছবি</th>
                                <th style="width: 20%">ব্যানারের শিরোনাম</th>
                                <th style="width: 15%">প্রোডাক্টের নাম</th>
                                <th style="width: 10%">প্রোডাক্টের দাম</th>
                                <th style="width: 10%">ব্যানার সাজান</th>
                                <th style="width: 20%" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = ($banners->currentpage() - 1) * $banners->perpage() + 1;
                        @endphp
                        <tbody>
                            @foreach ($banners as $banner)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td><img width="120px" src="{{ asset($banner->banner_photo) }}" alt="Banner Photo">
                                    </td>
                                    <td>
                                        {{ $banner->content_type == 'right' ? 'ডান পাশে' : 'ডান বাম' }}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td>{{ $banner->product_name }}</td>
                                    <td>
                                        <span class="badge badge-{{ $banner->active_status == 1 ? 'primary' : 'danger' }}">
                                            {{ $banner->active_status == 1 ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="text-center">

                                        <a href="{{ url('edit-banner/' . $banner->id) }}}}"
                                            class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                        <a href="{{ url('delete-banner/' . $banner->id) }}}}"
                                            class="btn btn-danger btn-sm" id="delete"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.getData').click(function() {
                $id = $(this).data("id");
                $category = $(this).data("category");
                $('#idUpdate').val($id);
                $('#category_name').val($category);
            })
        });
    </script>
@endsection
