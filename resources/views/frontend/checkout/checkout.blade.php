@extends('frontend.layout.frontendLayout')

@section('title', 'আমাদের শপ ।। হোম')
@section('pageClass', 'home')


@section('mainSection')
    <div class="page-wrapper">
        <h1 class="d-none">আমাদের শপ</h1>
        @include('frontend.include.header')
        <!-- End Header -->
        <main class="main mt-lg-4">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">আপনার প্রয়োজনিয় তথ্য দিয়ে সাবমিট করুন !</p>
                                    <hr>
                                    <form method="POST" action="{{ route('order') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="shipping_name">আপনার নাম</label>
                                                    <input type="taxt" class="form-control" id="shipping_name"
                                                        name="shipping_name" aria-describedby="emailHelp"
                                                        placeholder="আপনার নাম দিন" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="shipping_mobile"> আপনার মোবাইল নাম্বার</label>
                                                    <input type="taxt" class="form-control" id="shipping_mobile"
                                                        name="shipping_mobile" placeholder="আপনার মোবাইল নাম্বার নাম"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="shipping_email"> আপনার ইমেইল নাম্বার</label>
                                                    <input type="taxt" class="form-control" id="shipping_email"
                                                        name="shipping_email" placeholder=" আপনার ইমেইল নাম্বার নাম"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="shipping_address"> আপনার ঠিকানা</label>
                                                    <textarea type="taxt" rows="4" cols="50" required class="form-control" id="shipping_address" name="shipping_address"
                                                        placeholder="আপনার ঠিকানা নাম"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="division_id">বিভাগ</label>
                                                    <select class="form-control select2" required name="division_id"
                                                        id="division_id" data-placeholder="বিভাগ বাছাই করুন"
                                                        style="width: 100%;">
                                                        <option value=""></option>
                                                        @foreach ($divisions as $division)
                                                            <option value="{{ $division->id }}">
                                                                {{ $division->division_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group  mt-5">
                                                    <label for="district_id">জেলা</label>
                                                    <select class="form-control select2" required name="district_id"
                                                        id="district_id" data-placeholder="জেলা বাছাই করুন"
                                                        style="width: 100%;">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                                <div class="form-group  mt-5">
                                                    <label for="thana_id">থানা</label>
                                                    <select class="form-control select2" required name="thana_id"
                                                        id="thana_id" data-placeholder="থানা বাছাই করুন"
                                                        style="width: 100%;">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                                <div class="form-group  mt-3">
                                                    <label for="payment_type" class="mt-5">মুল্য পরিশোধের
                                                        পদ্ধতি</label>
                                                    <select class="form-control select2" required name="payment_type"
                                                        data-placeholder="মুল্য পরিশোধের পদ্ধতি বাছাই করুন"
                                                        style="width: 100%;">
                                                        <option value=""></option>
                                                        <option value="Cash On Delivary">প্রদানোত্তর পরিশোধ</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group mt-5">
                                                <button type="submit" class="btn btn-block btn-primary">অর্ডার করুন</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div>
                                    <h4 class="card-title text-center m-4">আপনার সকল কেনাকাটা</h4>
                                    <hr>
                                    <div class="card-body">

                                        @foreach ($carts as $cart)
                                            <div class="product product-cart">
                                                <figure class="product-media">
                                                    <a>
                                                        <img src="{{ $cart->options->product_thumbnail }}" alt="product"
                                                            width="80" height="88" />
                                                    </a>
                                                </figure>
                                                <div class="product-detail">
                                                    <a class="product-name">{{ $cart->name }}</a>
                                                    <div class="price-box">
                                                        <span class="product-quantity">{{ $cart->qty }}</span>
                                                        <span class="product-price">{{ $cart->price }}</span>
                                                        <span class="product-price"> = {{ $cart->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0">Total Item <span class="float-right"
                                                    id="cartQtyy"></span>
                                            </li>
                                            <li class="list-group-item border-0">Total Amount <span class="float-right"
                                                    id="cartTotall"></span>
                                            </li>
                                            @if (session()->has('coupon'))
                                                <li class="list-group-item border-0">Coupon Discount <span
                                                        class="float-right">
                                                        {{ session()->get('coupon')['discount_amount'] }} TK</span>
                                                </li>
                                            @endif
                                            <li class="list-group-item border-0">Other Cost <span class="float-right">0
                                                    TK</span>
                                            </li>
                                            @if (session()->has('coupon'))
                                                <li class="list-group-item border-0">Grand Total <span
                                                        class="float-right">
                                                        {{ session()->get('coupon')['total_amount'] }} TK</span>
                                                </li>
                                            @else
                                                <li class="list-group-item border-0">Grand Total <span
                                                        class="float-right" id="grandTotal"></span>
                                                </li>
                                            @endif
                                        </ul>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('frontend.include.footer')

        <!-- End Footer -->
    </div>
    @include('frontend.include.mobile')

@endsection

@section('scriptFontend')
    <script type="text/javascript">
        $(document).ready(function() {

            // ******************************************* division by district ********************************************** 
            $('#division_id').change(function(e) {
                e.preventDefault();
                var division_id = $(this).val();
                getDivisionByDistrict(division_id);
            });

            function getDivisionByDistrict(division_id) {
                var division_id = division_id;
                $.ajax({
                    type: "GET",
                    url: "{{ url('division-by-district') }}",
                    data: {
                        division_id: division_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#district_id").empty();
                        var options = '<option value=""></option>';

                        $.each(response, function(index, value) {
                            options +=
                                `<option value="${value.id}">${value.district_name}</option>`;
                        });

                        $("#district_id").append(options);
                    }
                });
            }

            // *******************************************  district by thana ********************************************** 

            $('#district_id').change(function(e) {
                e.preventDefault();
                var district_id = $(this).val();
                getDistrictByThana(district_id);
            });

            function getDistrictByThana(district_id) {
                var district_id = district_id;
                $.ajax({
                    type: "GET",
                    url: "{{ url('district-by-thana') }}",
                    data: {
                        district_id: district_id
                    },
                    dataType: "json",
                    success: function(response) {

                        $("#thana_id").empty();
                        var options = '<option value=""></option>';

                        $.each(response, function(index, value) {
                            options +=
                                `<option value="${value.id}">${value.thana_name}</option>`;
                        });

                        $("#thana_id").append(options);
                    }
                });
            }
        });
    </script>
@endsection
