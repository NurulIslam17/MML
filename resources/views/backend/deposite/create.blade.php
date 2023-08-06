@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h3><span>Add Deposite</span></h3>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <a href="{{ route('deposite.index') }}">
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
                                    <form method="POST" action="{{ route('deposite.store') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Member</label>
                                                    <select class="form-control" name="user_id">
                                                        @if (auth()->user()->type == 1)
                                                        <option selected disabled>----- Select Member----</option>
                                                            @foreach ($users as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        @else
                                                            <option selected value="{{ auth()->user()->id }}">
                                                                {{ auth()->user()->name }}
                                                            </option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Amount</label>
                                                    <input type="number" name="amount" value="{{ old('amount') }}"
                                                        class="form-control" placeholder="Enter Meal Number">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" name="deposite_on" class="form-control">
                                        </div>

                                        <input type="submit" class="btn btn-success rounded-5" value="Save">
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
