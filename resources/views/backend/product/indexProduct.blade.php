@extends('backend.masterLayout.admin-master')
@section('title')
    প্রোডাক্ট
@endsection

{{-- menu active start --}}
@section('product', 'menu-open')
@section('productActive', 'active')
@section('productList', 'active')
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
                            <th style="width: 10%">প্রোডাক্টের থাম্বনেল</th>
                            <th style="width: 10%">প্রোডাক্টের স্লাইডার</th>
                            <th style="width: 10%">ক্যাটেগরির নাম</th>
                            <th style="width: 12%">প্রোডাক্টের নাম</th>
                            <th style="width: 6%">প্রোডাক্টের পরিমান</th>
                            <th style="width: 10%">প্রোডাক্টের কোড</th>
                            <th style="width: 5%">প্রোডাক্টের দাম (টাকা)</th>
                            <th style="width: 5%">প্রোডাক্টের ডিস্কাউন্ট (%)</th>
                            <th style="width: 10%">আকশন</th>
                        </tr>
                    </thead>
                    @php
                        $serial = ($products->currentpage() - 1) * $products->perpage() + 1;
                    @endphp
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td><img src="{{ asset($product->product_thumbnail) }}" width="100px"
                                        alt="Product Thumbnail">
                                </td>
                                <td><img src="{{ asset($product->product_slider_img) }}" width="100px"
                                        alt="Product slider">
                                </td>
                                <td>{{ $product->category->category_name }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_qty }}</td>
                                <td>{{ $product->product_code }}</td>
                                <td>{{ banglaNumber($product->product_price) }} (টাকা)</td>
                                <td>{{ banglaNumber($product->product_discount) }} %</td>

                                <td class="text-center">
                                    <span class="d-flex m-1">
                                        <a href="{{ url('add-product-content/' . $product->id) }}"
                                            class="btn btn-primary btn-sm">Add
                                            Content</a>
                                    </span>
                                    <span class="d-flex">
                                        <a href="{{ url('product-edit/' . $product->id) }}"
                                            class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                        <a href="{{ url('product-delete/' . $product->id) }}"
                                            class="btn btn-danger btn-sm" id="delete"><i class="far fa-trash-alt"></i></a>
                                        <a href="{{ url('product-view/' . $product->id) }}"
                                            class="btn btn-success btn-sm"><i class="far fa-eye"></i></a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex float-right mt-2">
                    {!! $products->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
