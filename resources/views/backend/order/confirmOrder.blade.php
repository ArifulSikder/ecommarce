@extends('backend.masterLayout.admin-master')
@section('title')
    কনফার্ম অর্ডার
@endsection

{{-- menu active start --}}
@section('order', 'menu-open')
@section('activeOrder', 'active')
@section('confirm-order', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">কনফার্ম অর্ডার তালিকা</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5%">সিরিয়াল</th>
                            <th style="width: 15%"> ক্রেতার তথ্য</th>
                            <th style="width: 15%">ক্রেতার ঠিকানা </th>
                            <th style="width: 10%"> মুল্য পরিশধের পদ্ধতি</th>
                            <th style="width: 8%">অর্ডারের তারিখ</th>
                            <th style="width: 10%">অর্ডারের স্টেটাস</th>
                            <th style="width: 10%">মোট টাকা</th>
                            <th style="width: 10%" class="text-center">আকশন</th>
                        </tr>
                    </thead>
                    @php
                        $serial = ($orders->currentpage() - 1) * $orders->perpage() + 1;
                    @endphp
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>
                                    <strong>ক্রেতার নামঃ </strong>{{ $order->shipping_name }} <br>
                                    <strong>ক্রেতার মোবাইলঃ</strong>{{ $order->shipping_mobile }} <br>
                                    <strong>ক্রেতার ইমেইলঃ</strong>{{ $order->shipping_email }}
                                </td>
                                <td>
                                    <strong>বিভাগঃ {{ $order->division->division_name }}</strong> <br>
                                    <strong>জেলাঃ {{ $order->district->district_name }}</strong> <br>
                                    <strong>থানাঃ {{ $order->thana->thana_name }}</strong><br>
                                    <strong>বিস্তারিতঃ {{ $order->shipping_address }}</strong>

                                </td>
                                <td>{{ $order->payment_type }}</td>
                                <td>{{ dateFormater($order->order_date) }}</td>
                                <td>{{ $order->order_type }}</td>
                                <td>{{ $order->amount }}(tk)</td>

                                <td class="text-center">
                                    <a title="Process Order" href="{{ url('process-order/' . $order->id) }}"
                                        class="btn btn-primary btn-sm">Process Order</a>
                                    <a href="{{ url('order-items/' . $order->id) }}" class="btn btn-success btn-sm"><i
                                            class="far fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex float-right mt-2">
                    {!! $orders->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
