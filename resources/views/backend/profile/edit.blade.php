@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card py-0 my-0">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 bg-info py-4"></div>
                                        </div>

                                        <input type="hidden" name="profile_id" value="{{ $user->id }}">
                                        <div class="row">
                                            <div class="col-md-4">
                                                @if (isset($user->profile_image))
                                                    <img src="{{ asset('upload/images/' . $user->profile_image) }}"
                                                        style="height: 120px;width:120px;">
                                                @else
                                                    <img src="{{ asset('dashboard_assets/images/mms-logo.PNG') }}"
                                                        srcset="" style="height: 120px;width:120px;">
                                                @endif
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" name="name" value="{{ $user->name }}"
                                                        class="form-control mb-2">

                                                    <input type="email" name="email" value="{{ $user->email }}"
                                                        class="form-control mb-2">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Upload Photo</label>
                                            <input type="file" name="profile_photo_path" class="form-control">
                                        </div>

                                        <input type="submit" class="btn btn-success rounded-5 mb-3" value="Update">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('js')
@endpush
