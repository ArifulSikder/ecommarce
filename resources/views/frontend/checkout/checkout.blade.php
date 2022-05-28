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
                    <p>আপনার প্রয়োজনিয় তথ্য দিয়ে সাবমিট করুন !</p>
                    <form method="POST" action="{{ route('order') }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="shipping_name">আপনার নাম</label>
                                    <input type="taxt" class="form-control" id="shipping_name" aria-describedby="emailHelp"
                                        placeholder="আপনার নাম দিন">
                                </div>
                                <div class="form-group">
                                    <label for="shipping_mobile"> আপনার মোবাইল নাম্বার</label>
                                    <input type="taxt" class="form-control" id="shipping_mobile"
                                        placeholder="আপনার মোবাইল নাম্বার নাম">
                                </div>
                                <div class="form-group">
                                    <label for="shipping_email"> আপনার ইমেইল নাম্বার</label>
                                    <input type="taxt" class="form-control" id="shipping_email"
                                        placeholder=" আপনার ইমেইল নাম্বার নাম">
                                </div>
                                <div class="form-group">
                                    <label for="shipping_address"> আপনার ঠিকানা</label>
                                    <textarea type="taxt" rows="4" cols="50" class="form-control" id="shipping_address"
                                        placeholder="আপনার ঠিকানা নাম"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="division_id">বিভাগ</label>
                                    <select class="form-control select2" name="division_id" id="division_id"
                                        data-placeholder="বিভাগ বাছাই করুন" style="width: 100%;">
                                        <option value=""></option>
                                        @foreach ($divisions as $division)
                                            <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group  mt-5">
                                    <label for="district_id">জেলা</label>
                                    <select class="form-control select2" name="district_id" id="district_id"
                                        data-placeholder="জেলা বাছাই করুন" style="width: 100%;">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group  mt-5">
                                    <label for="thana_id">থানা</label>
                                    <select class="form-control select2" name="thana_id" id="thana_id"
                                        data-placeholder="থানা বাছাই করুন" style="width: 100%;">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group  mt-3">
                                    <label for="thana" class="mt-5">মূল্যপরিশোধ পদ্ধতি</label>
                                    <select class="form-control select2" data-placeholder="থানা বাছাই করুন"
                                        style="width: 100%;">
                                        <option value=""></option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
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
