@extends('backend.masterLayout.admin-master')
@section('title')
    যোগাযোগ
@endsection

{{-- menu active start --}}
@section('contact', 'menu-open')
@section('contactActive', 'active')
@section('contact-us', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">যোগাযোগের তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20%">মোবাইল</th>
                                <th style="width: 20%"> ইমেইল</th>
                                <th style="width: 20%"> ঠিকানা</th>
                                <th style="width: 20%" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($contact))
                                <tr>
                                    <td>{{ $contact->mobile }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->address }}</td>
                                    <td class="text-center">
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-primary btn-sm getCouponData"
                                            data-toggle="modal" data-target="#mainLogo{{ $contact->id }}"><i
                                                class="far fa-edit"></i></button>
                                    </td>
                                </tr>
                                <!-- modal edit -->
                                <div class="modal fade" id="mainLogo{{ $contact->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="editBrandModal" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title" id="editBrandModal">লোগো ইডিট করুন</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <form role="form" method="POST"
                                                        action="{{ route('insertAndUpdateLogo') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $contact->id }}">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="main_contact">লোগো ছবি বাছাই</label>
                                                                <input type="file"
                                                                    class="form-control  @error('main_contact') is-invalid @enderror"
                                                                    id="photoUpload" name="main_contact"
                                                                    placeholder="ব্রান্ডের ছবি দিন">
                                                            </div>
                                                            @error('main_contact')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <img id="previewHolder" height="100px"
                                                                src="{{ asset($contact->main_contact) }}"
                                                                alt="main_contact preview">
                                                        </div>
                                                        <!-- /.card-body -->

                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary btn-block">সেভ
                                                                করুন</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
