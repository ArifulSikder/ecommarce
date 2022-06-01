@extends('backend.masterLayout.admin-master')
@section('title')
    Dashboard
@endsection

{{-- menu active start --}}
@section('dashboardActive', 'active')
{{-- menu active end --}}
@section('maincontant')
    @php
    $color = [
        1 => 'bg-primary',
        2 => 'bg-success',
        3 => 'bg-info',
        4 => 'bg-secondary',
        5 => 'bg-dark',
        6 => 'bg-warning',
    ];
    $color2 = [
        1 => 'bg-danger',
    ];
    $serial = 1;
    @endphp

    <div class="card">
        <div class="card-body">
            <!-- Small boxes (Stat box) -->
            <h4>Total Visitor</h4>
            <div class="row">
                <div class="col-lg-3 col-6 text-white">
                    <!-- small box -->
                    <div
                        class="small-box {{ $serial < 7 ? $color[$serial++] : $color2[($serial = $serial - ($serial - 1))] }}">
                        <div class="inner">
                            <h4>মোট ভ্রমনকারির সংখ্যা </h4>
                            <h5>{{ $allVisitor }} জন</h5>
                        </div>
                        <div class="icon">
                            {{-- <i class="ion ion-bag"></i> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 text-white">
                    <!-- small box -->
                    <div
                        class="small-box {{ $serial < 7 ? $color[$serial++] : $color2[($serial = $serial - ($serial - 1))] }}">
                        <div class="inner">
                            <h4>সর্বশেষ ভ্রমনের সময় </h4>
                            <h5>{{ banglaNumber(timeFormater($lastVisitTime->date)) }}</h5>
                        </div>
                        <div class="icon">
                            {{-- <i class="ion ion-bag"></i> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <!-- Small boxes (Stat box) -->
            <h4>Categories</h4>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-3 col-6 text-white">
                        <!-- small box -->
                        <div class="small-box {{ $serial < 7 ? $color[$serial++] : $color2[($serial = 1)] }}">
                            <div class="inner">
                                <h4>{{ $category->category_name }}</h4>
                                <h5>মোট ভ্রমন করেছেঃ {{ banglaNumber(categoryVisitedTimes($category->id)) }} বার</h5>
                            </div>
                            <div class="icon">
                                {{-- <i class="ion ion-bag"></i> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <!-- Small boxes (Stat box) -->
            <h4>Products</h4>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-6 text-white">
                        <!-- small box -->
                        {{-- @php
                            dd(other($serial++));
                        @endphp --}}
                        <div class="small-box {{ $serial < 7 ? $color[$serial++] : $color2[($serial = 1)] }}">
                            <div class="inner">
                                <h4>{{ $product->product_name }}</h4>
                                <h5>মোট ভ্রমন করেছেঃ {{ banglaNumber(productVisitedTimes($product->id)) }} বার</h5>
                            </div>
                            <div class="icon">
                                {{-- <i class="ion ion-bag"></i> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
@endsection
