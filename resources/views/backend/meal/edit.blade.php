@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h3><span>Edit Meal</span></h3>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <a href="{{ route('meal.index') }}">
                                    <button type="button" class="btn btn-info btn-flat btn-addon m-b-10 m-l-5"><i
                                            class="ti-view-list"></i>List</button>
                                </a>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">

                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="#}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Member</label>
                                                    <input type="text" disabled value="{{$meal->user->name }}"
                                                        class="form-control" placeholder="Enter Meal Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>No. of Meals</label>
                                                    <input type="number" name="meal_no" value="{{ $meal->meal_no }}"
                                                        class="form-control" placeholder="Enter Meal Number">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" name="meal_on" class="form-control">
                                        </div>

                                        <input type="submit" class="btn btn-success rounded-5" value="Update">
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
