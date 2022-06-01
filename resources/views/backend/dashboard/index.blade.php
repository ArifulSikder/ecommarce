@extends('backend.masterLayout.admin-master')
@section('title')
    Dashboard
@endsection

{{-- menu active start --}}
@section('dashboardActive', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="card">
        <div class="card-body">
            <!-- Small boxes (Stat box) -->
            <h4>Categories</h4>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-3 col-6 text-white">
                        <!-- small box -->
                        <div class="small-box"
                            style="background-color: rgb( {{ mt_rand(50, 100) }},168, {{ mt_rand(50, 260) }});">
                            <div class="inner">
                                <h3>{{ $category->category_name }}</h3>

                                <h5>মোট ভ্রমন করেছেঃ {{ banglaNumber(categoryVisitedTimes($category->id)) }} বার</h5>
                            </div>
                            <div class="icon">
                                {{-- <i class="ion ion-bag"></i> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
