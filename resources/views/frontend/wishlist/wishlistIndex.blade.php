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
                        <div class="col-lg-12">
                            <p>আপনার উইসলিস্টের পোডাক্ট</p>
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-shopping-cart">
                                        <thead class="text-bold">
                                            <tr class='text-center'>
                                                <th scope="col">প্রোডাক্টের ছবি</th>
                                                <th scope="col">প্রোডাক্টের নাম</th>
                                                <th scope="col">স্টকে আছে কিনা</th>
                                                <th scope="col">মুল্য</th>
                                                <th scope="col"> অন্যান্য</th>
                                            </tr>
                                        </thead>
                                        <tbody id="wishListData" class='text-center'>

                                        </tbody>
                                    </table>
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
