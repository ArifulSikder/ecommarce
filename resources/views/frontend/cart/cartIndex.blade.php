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
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-shopping-cart">
                                        <thead class="text-bold">
                                            <tr class="text-uppercase">
                                                <th scope="col" width="45%">প্রোডাক্ট</th>
                                                <th scope="col" width="15%">প্রোডাক্টের</th>
                                                <th scope="col" width="10%">মুল্য</th>
                                            </tr>
                                        </thead>
                                        <tbody id="CartListItem">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form>
                                        <label>Have coupon?</label>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control email" name="email" id="email2"
                                                    placeholder="Enter Coupon...">
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-dark" style="font-size: 11px;"
                                                    type="submit">SUBMIT</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item border-0">Total Item <span class="float-right"
                                                id="cartQtyy"></span>
                                        </li>
                                        <li class="list-group-item border-0">Total Amount <span class="float-right"
                                                id="cartTotall"></span></li>
                                        <li class="list-group-item border-0">Other Cost <span class="float-right">0
                                                TK</span></li>
                                        <li class="list-group-item border-0">Grand Total <span class="float-right"
                                                id="grandTotal"></span></li>
                                        <ul>
                                            <hr>
                                            <a href="#" class="btn btn-out btn-primary btn-square btn-main" data-abc="true">
                                                Check Out
                                            </a>
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


@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-input-spinner@3.1.10/src/bootstrap-input-spinner.min.js"></script>
    <script>
        $("input[type='number']").inputSpinner();
    </script>
@endsection