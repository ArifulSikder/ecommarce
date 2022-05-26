@extends('backend.masterLayout.admin-master')
@section('title')
    বিভাগ
@endsection

{{-- menu active start --}}
@section('location', 'menu-open')
@section('activeLocation', 'active')
@section('division-list', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-7">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">বিভাগের তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="">সিরিয়াল</th>
                                <th style="">বিভাগের নাম</th>
                                <th style="" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = ($divisions->currentpage() - 1) * $divisions->perpage() + 1;
                        @endphp
                        <tbody>
                            @foreach ($divisions as $division)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $division->division_name }}</td>
                                    <td class="text-center">
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-primary btn-sm getData" data-toggle="modal"
                                            data-target="#editDivision" data-id="{{ $division->id }}"
                                            data-division="{{ $division->division_name }}"><i
                                                class="far fa-edit"></i></button>

                                        <a href="{{ url('division-delete/' . $division->id) }}}}"
                                            class="btn btn-danger btn-sm" id="delete"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex float-right mt-2">
                        {!! $divisions->links('pagination::bootstrap-5') !!}
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
                    <form role="form" method="POST" action="{{ route('storeDivision') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="division_name">বিভাগের নাম</label>
                                <input type="text" class="form-control  @error('division_name') is-invalid @enderror"
                                    id="division_name" name="division_name" placeholder="বিভাগের নাম দিন"
                                    value="{{ old('division_name') }}">
                            </div>

                            @error('division_name')
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

    {{-- edit division --}}
    <div class="modal fade" id="editDivision" tabindex="-1" role="dialog" aria-labelledby="editDivisionItem"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="editDivisionItem">বিভাগ ইডিট করুন</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" id="divisionFrom">
                        <input type="hidden" id="id_up" name="id">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="division_name">বিভাগের নাম</label>
                                <input type="text" class="form-control" name="division_name" placeholder="বিভাগের নাম দিন"
                                    id="division_name_up">
                            </div>
                            <span class="text-danger" id="divisionError"></span>
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
            $('.getData').click(function() {
                var id = $(this).data("id");
                var division = $(this).data("division");

                $('#id_up').val(id);
                $('#division_name_up').val(division);

            });


            $("#divisionFrom").on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData($("#divisionFrom")[0]);
                $.ajax({
                    type: "POST",
                    url: "{{ route('division-update') }}",
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
                                $("#divisionError").text(value.division_name);
                            });

                        } else if (response.status == 1) {
                            toastr.success(response.success);
                            $('#editDivision').modal('hide');
                            location.reload();
                            $("#EditForm")[0].reset();
                            // $(".table").load(location.href + " .table");

                        } else if (response.status == 2) {
                            toastr.success(response.error);
                        }
                    },
                    error: function(error) {
                        $("#divisionError").text(error.category_slug);
                    }
                });
            });
        });
    </script>
@endsection
