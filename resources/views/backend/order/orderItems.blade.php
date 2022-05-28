@extends('backend.masterLayout.admin-master')
@section('title')
    অর্ডারের ধরন
@endsection

{{-- menu active start --}}
@section('order', 'menu-open')
@section('activeOrder', 'active')
@section('order-list', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">অর্ডারের ধরনের তালিকা</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5%">সিরিয়াল</th>
                            <th style="width: 15%"> প্রোডাক্ট</th>
                            <th style="width: 15%">প্রোডাক্টের সংখ্যা </th>
                            <th style="width: 10%"> মুল্য </th>
                        </tr>
                    </thead>
                    @php
                        $serial = 1;
                    @endphp
                    <tbody>
                        @foreach ($orderItems as $item)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>{{ $item->product->product_name }}</td>
                                <td>{{ $item->product_qty }} টি</td>
                                <td>{{ $item->price }} tk</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
