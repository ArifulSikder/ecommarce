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
                        <div class="col-lg-9">
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
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form>
                                        <label>Have coupon?</label>
                                        <input type="email" class="form-control email" name="email" id="email2"
                                            placeholder="Enter Coupon...">
                                        <button class="btn btn-dark" type="submit">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <dl class="dlist-align">
                                        <dt>Total price:</dt>
                                        <dd class="text-right ml-3">$69.97</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Discount:</dt>
                                        <dd class="text-right text-danger ml-3">- $10.00</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Total:</dt>
                                        <dd class="text-right text-dark b ml-3"><strong>$59.97</strong></dd>
                                    </dl>
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
