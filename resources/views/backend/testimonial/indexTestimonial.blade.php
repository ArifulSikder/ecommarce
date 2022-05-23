@extends('backend.masterLayout.admin-master')
@section('title')
    প্রশংসাপত্র
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
                <h3 class="card-title">প্রশংসাপত্রের তালিকা</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5%">সিরিয়াল</th>
                            <th style="width: 10%">ছবি</th>
                            <th style="width: 10%">লেখক </th>
                            <th style="width: 10%"> পদবি</th>
                            <th style="width: 10%" class="text-center">আকশন</th>
                        </tr>
                    </thead>
                    {{-- @php
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
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_discount }}</td>

                                <td class="text-center">
                                    <a href="{{ url('product-edit/' . $product->id) }}" class="btn btn-primary btn-sm"><i
                                            class="far fa-edit"></i></a>
                                    <a href="{{ url('product-delete/' . $product->id) }}" class="btn btn-danger btn-sm"
                                        id="delete"><i class="far fa-trash-alt"></i></a>
                                    <a href="{{ url('product-view/' . $product->id) }}" class="btn btn-success btn-sm"><i
                                            class="far fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
