@extends('backend.masterLayout.admin-master')
@section('title')
    সামাজিক মাধ্যম লিংক
@endsection

{{-- menu active start --}}
@section('social', 'menu-open')
@section('socialActive', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">সামাজিক মাধ্যম লিংক তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">সিরিয়াল</th>
                                <th style="width: 20%">ফেজবুক</th>
                                <th style="width: 20%"> টুইটার</th>
                                <th style="width: 20%"> লিংকডিন</th>
                                <th style="width: 20%" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = 1;
                        @endphp
                        <tbody>
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>{{ $social->facebook }}</td>
                                <td>{{ $social->twitter }}</td>
                                <td>{{ $social->linkdin }}</td>
                                <td class="text-center">
                                    <!-- Large modal -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#socialModal"><i class="far fa-edit"></i></button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="socialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> সামাজিক মাধ্যম লিংক আপডেট করুন</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form role="form" method="POST" action="{{ route('social-update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $social->id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="facebook">ফেজবুক</label>
                                <input type="text" class="form-control  @error('facebook') is-invalid @enderror"
                                    id="facebook" name="facebook" placeholder="ফেজবুক লিংক দিন"
                                    value="{{ $social->facebook }}">
                            </div>
                            @error('facebook')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="twitter">টুইটার</label>
                                <input type="text" class="form-control  @error('twitter') is-invalid @enderror"
                                    id="twitter" name="twitter" placeholder="টুইটার লিংক দিন"
                                    value="{{ $social->twitter }}">
                            </div>
                            @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="linkdin">লিংকডিন</label>
                                <input type="text" class="form-control  @error('linkdin') is-invalid @enderror"
                                    id="categoryIcon" name="linkdin" placeholder="লিংকডিন লিংক দিন"
                                    value="{{ $social->linkdin }}">
                            </div>
                            @error('linkdin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
