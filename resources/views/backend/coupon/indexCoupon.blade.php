@extends('backend.masterLayout.admin-master')
@section('title')
    কুপন
@endsection

{{-- menu active start --}}
@section('coupon', 'menu-open')
@section('couponActive', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-7">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">কুপনের তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">সিরিয়াল</th>
                                <th style="width: 20%">কুপনের নাম</th>
                                <th style="width: 20%">কুপনের ডিস্কাউন্ট</th>
                                <th style="width: 15%">কুপনের ভিজিবিলিটি</th>
                                <th style="width: 15%">স্টেটাস</th>
                                <th style="width: 20%" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = ($coupons->currentpage() - 1) * $coupons->perpage() + 1;
                        @endphp
                        <tbody>
                            @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $coupon->coupon_name }}</td>
                                    <td>{{ $coupon->coupon_discount }} %</td>
                                    <td>
                                        {{ dateFormater($coupon->coupon_validity_date) }}
                                    </td>
                                    <td>
                                        <span
                                            class="badge badge-{{ $coupon->coupon_validity_date >= dateToday() ? 'success' : 'danger' }}">
                                            {{ $coupon->coupon_validity_date >= dateToday() ? 'Valid' : 'Invalid' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-primary btn-sm getCouponData"
                                            data-toggle="modal" data-target="#couponEdit" data-id='{{ $coupon->id }}'
                                            data-name='{{ $coupon->coupon_name }}'
                                            data-discount='{{ $coupon->coupon_discount }}'
                                            data-date='{{ $coupon->coupon_validity_date }}'><i
                                                class="far fa-edit"></i></button>

                                        <a href="{{ url('delete-coupon/' . $coupon->id) }}}}"
                                            class="btn btn-danger btn-sm" id="delete"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex float-right mt-2">
                        {!! $coupons->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">কুপন যোগ করুন</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('storeCoupon') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="coupon_name">কুপনের নাম</label>
                                <input type="text" class="form-control  @error('coupon_name') is-invalid @enderror"
                                    id="coupon" name="coupon_name" placeholder="কুপনের নাম দিন"
                                    value="{{ old('coupon_name') }}">
                            </div>
                            @error('coupon_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="coupon_discount">কুপনের ডিস্কাউন্ট</label>
                                <input type="number" class="form-control  @error('coupon_discount') is-invalid @enderror"
                                    id="coupon_discount" name="coupon_discount" placeholder="কুপনের ডিস্কাউন্ট দিন"
                                    value="{{ old('coupon_discount') }}">
                            </div>
                            @error('coupon_discount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="coupon_validity_date">কুপনের ভিজিবিলিটি</label>
                                <input type="text"
                                    class="form-control minToday @error('coupon_validity_date') is-invalid @enderror"
                                    id="coupon_validity_date" name="coupon_validity_date"
                                    placeholder="কুপনের ভিজিবিলিটি দিন" value="{{ old('coupon_validity_date') }}"
                                    value="{{ dateToday() }}">
                            </div>
                            @error('coupon_validity_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="modal fade" id="couponEdit" tabindex="-1" role="dialog" aria-labelledby="editModalcoupon"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="editModalcoupon">কুপন ইডিট করুন</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" id="CouponData">
                        <div class="card-body">
                            <input type="hidden" id="coupon_id_up" name="id">
                            <div class="form-group">
                                <label for="coupon_name">কুপনের নাম</label>
                                <input type="text" class="form-control  @error('coupon_name') is-invalid @enderror"
                                    id="coupon_name_up" name="coupon_name" placeholder="কুপনের নাম দিন"
                                    value="{{ old('coupon_name') }}">
                            </div>
                            <span class="text-danger" id="errorName"></span>


                            <div class="form-group">
                                <label for="coupon_discount">কুপনের ডিস্কাউন্ট</label>
                                <input type="number" class="form-control  @error('coupon_discount') is-invalid @enderror"
                                    id="coupon_discount_up" name="coupon_discount" placeholder="কুপনের ডিস্কাউন্ট দিন"
                                    value="{{ old('coupon_discount') }}">
                            </div>
                            <span class="text-danger" id="errorDiscount"></span>


                            <div class="form-group">
                                <label for="coupon_validity_date">কুপনের ভিজিবিলিটি</label>
                                <input type="text"
                                    class="form-control minToday @error('coupon_validity_date') is-invalid @enderror"
                                    id="coupon_validity_date_up" name="coupon_validity_date"
                                    placeholder="কুপনের ভিজিবিলিটি দিন" value="{{ old('coupon_validity_date') }}"
                                    value="{{ dateToday() }}">
                            </div>
                            <span class="text-danger" id="errorDate"></span>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">আপডেট করুন</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $(".minToday").datepicker({
                showButtonPanel: true,
                showTodayButton: true,
                showAnim: 'slide',
                yearRange: '1920 : ' + '2050',
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd',
                minDate: (new Date()),
            });
            $('.getCouponData').click(function() {
                var id = $(this).data("id");
                var name = $(this).data("name");
                var discount = $(this).data("discount");
                var date = $(this).data("date");

                $('#coupon_name_up').val(name);
                $('#coupon_discount_up').val(discount);
                $('#coupon_validity_date_up').val(date);
                $('#coupon_id_up').val(id);

            });

            $("#CouponData").on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData($("#CouponData")[0]);
                $.ajax({
                    type: "POST",
                    url: "{{ route('update-coupon') }}",
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response.status)
                        if (response.status == 0) {
                            $.each(response, function(index, value) {
                                $("#errorName").text(value.coupon_name);
                                $("#errorDiscount").text(value.coupon_discount);
                                $("#errorDate").text(value.coupon_validity_date);
                            });

                        } else if (response.status == 1) {
                            toastr.success(response.success);
                            $("#CouponData")[0].reset();
                            location.reload();
                            $('#couponEdit').modal('hide');
                            // $(".table").load(location.href + " .table");

                        } else if (response.status == 2) {
                            toastr.success(response.error);
                        }
                    },
                    error: function(error) {
                        $("#errorName").text(error.coupon_name);
                        $("#errorDiscount").text(error.coupon_discount);
                        $("#errorDate").text(error.coupon_validity_date);
                    }
                });
            });
        });
    </script>
@endsection
