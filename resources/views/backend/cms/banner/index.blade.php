@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h3><span>Banner</span></h3>
                        </div>
                    </div>
                </div>
                <!-- /# column -->

                @if (auth()->user()->type == 1)
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    {{-- <a href="#">
                                        <button type="button" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5"><i
                                                class="ti-plus"></i></button>
                                    </a> --}}
                                </ol>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('banner.update',$banner->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if ($banner->image)
                                                <img src="{{ asset('upload/banner/' . $banner->image) }}"
                                                    class="rounded-circle" style="height: 90px;width:90px" alt=""
                                                    srcset="">
                                            @else
                                                <img src="{{ asset('web_assets/assets/img/hero-img.png') }}"
                                                    class="rounded-circle" style="height: 90px;width:90px" alt=""
                                                    srcset="">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <input type="file" name="image" class="form-control" id="">
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <label for="">Title</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" value="{{ $banner->title }}" name="title" id="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="">Description</label>
                                        <div class="col-md-12">
                                            <textarea name="description" class="form-control w-100" style="height: 100px" id="" rows="20">
                                                {{ $banner->description }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="">
                                            <button type="submit" class="btn btn-success rounded-0">Update</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
            </section>
        </div>
    </div>
@endsection
