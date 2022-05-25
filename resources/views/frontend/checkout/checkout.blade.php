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
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="shipping_name">আপনার নাম</label>
                                    <input type="taxt" class="form-control" id="shipping_name" aria-describedby="emailHelp"
                                        placeholder="আপনার নাম দিন">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="shipping_address"> আপনার ঠিকানা</label>
                                    <input type="taxt" class="form-control" id="shipping_address"
                                        placeholder="আপনার ঠিকানা নাম">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="shipping_mobile"> আপনার মোবাইল নাম্বার</label>
                                    <input type="taxt" class="form-control" id="shipping_mobile"
                                        placeholder="আপনার মোবাইল নাম্বার নাম">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="division">বিভাগ</label>
                                    <select class="form-control select2" data-placeholder="বিভাগ বাছাই ক্রুন"
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="district">জেলা</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="thana">থানা</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
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
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
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
