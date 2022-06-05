@extends('backend.masterLayout.admin-master')
@section('title')
    পণ্য পৌছানো সংক্রান্ত তথ্য
@endsection

{{-- menu active start --}}
@section('product', 'menu-open')
@section('productActive', 'active')
@section('shippingInformation', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-7">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">পণ্য পৌছানো সংক্রান্ত তথ্যের তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">সিরিয়াল</th>
                                <th style="width: 15%">শিরোনাম</th>
                                <th style="width: 40%"> বর্ননা</th>
                                <th style="width: 20%" class="text-center">আকশন</th>
                            </tr>
                        </thead>
                        @php
                            $serial = ($shippingInfo->currentpage() - 1) * $shippingInfo->perpage() + 1;
                        @endphp
                        <tbody>
                            @foreach ($shippingInfo as $info)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $info->title }}</td>
                                    <td>{!! Str::limit($info->description, 100) !!}<br></td>
                                    <td class="text-center">
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-primary btn-sm getData" data-toggle="modal"
                                            data-target="#editShippingInfo{{ $info->id }}"><i
                                                class=" far fa-edit"></i></button>
                                        <a href="{{ url('category/' . $info->id) }}}}" class="btn btn-danger btn-sm"
                                            id="delete"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>

                                {{-- edit modal --}}
                                <div class="modal fade" id="editShippingInfo{{ $info->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="editShippingInfoModal" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title" id="editShippingInfoModal"> ইডিট করুন</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="POST" action="{{ route('storeShipping') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $info->id }}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="title">শিরোনাম</label>
                                                            <input type="text"
                                                                class="form-control  @error('title') is-invalid @enderror"
                                                                id="title" name="title" placeholder="শিরোনাম দিন"
                                                                value="{{ $info->title }}">
                                                        </div>
                                                        @error('title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <div class="form-group">
                                                            <label for="description">বর্ননা </label>
                                                            <textarea type="text" class="form-control textarea @error('description') is-invalid @enderror" id="description"
                                                                name="description" placeholder="বর্ননা দিন"
                                                                value="">{{ $info->description }}</textarea>
                                                        </div>
                                                        @error('description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-block">আপডেট
                                                            করুন</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex float-right mt-2">
                        {!! $shippingInfo->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> পণ্য পৌছানো সংক্রান্ত তথ্য যোগ করুন</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('storeShipping') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">শিরোনাম</label>
                                <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title"
                                    name="title" placeholder="শিরোনাম দিন" value="{{ old('title') }}">
                            </div>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="description">বর্ননা </label>
                                <textarea type="text" class="form-control textarea @error('description') is-invalid @enderror" id="description"
                                    name="description" placeholder="বর্ননা দিন"
                                    value="{{ old('description') }}"></textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
