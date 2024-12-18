@extends('backend.masterLayout.admin-master')
@section('title')
    থানা
@endsection

{{-- menu active start --}}
@section('location', 'menu-open')
@section('activeLocation', 'active')
@section('thana-list', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-7">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">থানার তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="">সিরিয়াল</th>
                                <th style="">বিভাগের নাম</th>
                                <th style="">জেলার নাম</th>
                                <th style="">থানার নাম</th>
                                <th style="" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = ($thanas->currentpage() - 1) * $thanas->perpage() + 1;
                        @endphp
                        <tbody>
                            @foreach ($thanas as $thana)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $thana->division->division_name }}</td>
                                    <td>{{ $thana->district->district_name }}</td>
                                    <td>{{ $thana->thana_name }}</td>
                                    <td class="text-center">
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-primary btn-sm getData" data-toggle="modal"
                                            data-target="#editThana" data-id="{{ $thana->id }}"
                                            data-division_id="{{ $thana->division_id }}"
                                            data-district_id="{{ $thana->district_id }}"
                                            data-thana_name="{{ $thana->thana_name }}"><i
                                                class="far fa-edit"></i></button>

                                        <a href="{{ url('division-delete/' . $thana->id) }}}}"
                                            class="btn btn-danger btn-sm" id="delete"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex float-right mt-2">
                        {!! $thanas->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">বিভাগ যোগ করুন</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('storeThana') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="division_id">বিভাগের নাম</label>
                                <select name="division_id" id="division_id"
                                    class="form-control select2  @error('division_id') is-invalid @enderror"
                                    style="width: 100%;" data-placeholder='বিভাগের নাম বাছাই ক্রুন'>
                                    <option value=""></option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}"
                                            {{ collect(old('division_id'))->contains($division->id) ? 'selected' : '' }}>
                                            {{ $division->division_name }}</option>
                                    @endforeach
                                </select>
                                @error('division_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="district_id">জেলার নাম</label>
                                <select name="district_id" id="district_id"
                                    class="form-control select2  @error('district_id') is-invalid @enderror"
                                    style="width: 100%;" data-placeholder='জেলার নাম বাছাই ক্রুন'>
                                    <option value=""></option>

                                </select>
                                @error('district_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="thana_name">থানার নাম</label>
                                <input type="text" class="form-control  @error('thana_name') is-invalid @enderror"
                                    id="thana_name" name="thana_name" placeholder="থানার নাম দিন"
                                    value="{{ old('thana_name') }}">
                            </div>

                            @error('thana_name')
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

    {{-- edit thana --}}
    <div class="modal fade" id="editThana" tabindex="-1" role="dialog" aria-labelledby="editThanaData"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="editThanaData">বিভাগ ইডিট করুন</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" id="thanaFrom">
                        <input type="hidden" name="id" id='id_up'>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="division_id">বিভাগের নাম</label>
                                <select name="division_id" id="division_id_up" class="form-control select2  "
                                    style="width: 100%;" data-placeholder='বিভাগের নাম বাছাই ক্রুন'>
                                    <option value=""></option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}"
                                            {{ collect(old('division_id'))->contains($division->id) ? 'selected' : '' }}>
                                            {{ $division->division_name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger" id="divisionError"></span>
                            </div>
                            <div class="form-group">
                                <label for="district_id">জেলার নাম</label>
                                <select name="district_id" id="district_id_up" class="form-control select2 "
                                    style="width: 100%;" data-placeholder='জেলার নাম বাছাই ক্রুন'>
                                    <option value=""></option>

                                </select>

                                <span class="text-danger" id="districtError"></span>
                            </div>
                            <div class="form-group">
                                <label for="thana_name">থানার নাম</label>
                                <input type="text" class="form-control  @error('thana_name') is-invalid @enderror"
                                    id="thana_name_up" name="thana_name" placeholder="থানার নাম দিন" value="">
                            </div>

                            <span class="text-danger" id="thanaError"></span>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
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

            $('.getData').click(function() {
                var id = $(this).data("id");
                var division_id = $(this).data("division_id");
                var district_id = $(this).data("district_id");
                var thana_name = $(this).data("thana_name");


                $('#id_up').val(id);
                $('#division_id_up').val(division_id).trigger('change');
                if (division_id != null) {
                    divisionByDistrictEdit(division_id, district_id);
                }
                $('#thana_name_up').val(thana_name);
            });

            //division by district get
            $('#division_id').change(function(e) {
                e.preventDefault();
                var division_id = $(this).val();
                divisionByDistrict(division_id);
            });

            // for insert 
            function divisionByDistrict(division_id) {
                var division_id = division_id;

                $.ajax({
                    type: "POST",
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
            // for edit  get district
            function divisionByDistrictEdit(division_id, district_id) {
                var division_id = division_id;
                var district_id = district_id;

                $.ajax({
                    type: "POST",
                    url: "{{ url('division-by-district') }}",
                    data: {
                        division_id: division_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#district_id_up").empty();
                        var options = '<option value=""></option>';

                        $.each(response, function(index, value) {
                            options +=
                                `<option value="${value.id}">${value.district_name}</option>`;
                        });

                        $("#district_id_up").append(options);

                        $('#district_id_up').val(district_id).trigger('change');
                    }
                });
            }


            $("#thanaFrom").on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData($("#thanaFrom")[0]);
                $.ajax({
                    type: "POST",
                    url: "{{ route('thana-update') }}",
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },


                    success: function(response) {
                        if (response.status == 0) {
                            $.each(response, function(index, value) {
                                $("#divisionError").text(value.division_id);
                                $("#districtError").text(value.district_id);
                                $("#thanaError").text(value.thana_name);
                            });

                        } else if (response.status == 1) {
                            toastr.success(response.success);
                            $('#editThana').modal('hide');
                            location.reload();
                            $("#thanaFrom")[0].reset();
                            // $(".table").load(location.href + " .table");

                        } else if (response.status == 2) {
                            toastr.success(response.error);
                        }
                    },
                    error: function(error) {
                        $("#divisionError").text(error.division_id);
                        $("#districtError").text(error.district_id);
                        $("#thanaError").text(error.thana_name);
                    }
                });
            });
        });
    </script>
@endsection
