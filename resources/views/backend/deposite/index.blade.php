@php
    $for = request()->get('for');
@endphp

@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h3><span>Deposite List</span></h3>
                        </div>
                    </div>
                </div>
                <!-- /# column -->

                @if (auth()->user()->type == 1)
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <a href="{{ route('deposite.create') }}">
                                        <button type="button" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5"><i
                                                class="ti-plus"></i>Create</button>
                                    </a>
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
                    <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="p-1 bg-info">
                                <form action="{{ route('deposite.index') }}" method="get">
                                    <div class="row">
                    
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Member</label>
                                                <select class="form-control" name="for">
                                                    <option selected disabled>----- Select Member----</option>
                                                    @foreach ($users as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $for == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2" style="margin-top:32px;">
                                            <input type="submit" class="btn btn-success rounded-5 w-100" value="Search">
                                        </div>
                                        <div class="col-md-2" style="margin-top:32px;">
                                            <a href="{{ route('meal.index')}}" class="btn btn-warning rounded-5 w-100"  rel="noopener noreferrer">Refresh</a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table m-t-20 text-center bootstrap-data-table-panel" id="#myTable">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SL</th>
                                                <th>Deposite By</th>
                                                <th>Amount(BDT)</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($deposites as $key => $item)
                                                <tr>
                                                    <td>#{{ $key + 1 }}</td>
                                                    <td>
                                                        {{ $item->user->name }}
                                                    </td>
                                                    <td>
                                                        {{ $item->amount }}
                                                    </td>
                                                    <td>
                                                        {{ \Carbon\Carbon::parse($item->deposite_on)->format('d M , Y') }}
                                                    </td>
                                                    <td>

                                                        @if (auth()->user()->type == 1)
                                                            <a href="#">
                                                                <button type="button"
                                                                    class="btn btn-success btn-flat py-0">Edit</button>
                                                            </a>
                                                        @endif

                                                        <a href="#">
                                                            <button type="button"
                                                                class="btn btn-info btn-flat py-0">Details</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2023 © Nurul</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
