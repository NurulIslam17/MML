@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1><span>All Bazar</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <a href="{{ route('bazar.create') }}">
                                    <button type="button" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5"><i
                                            class="ti-plus"></i>Create</button>
                                </a>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table m-t-20 text-center bootstrap-data-table-panel" id="#myTable">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SL</th>
                                                <th>User</th>
                                                <th>Price (BDT)</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bazars as $key => $bazar)
                                                <tr>
                                                    <td>#{{ $key + 1 }}</td>
                                                    <td>
                                                        {{ $bazar->user->name }}
                                                    </td>
                                                    <td>
                                                        {{ $bazar->price }}
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-primary">Paid</span>
                                                    </td>
                                                    <td>
                    
                                                        {{ \Carbon\Carbon::parse($bazar->bazar_date)->format('d M , Y')}}
                                                    </td>
                                                    <td>
                                                        <a href="#">
                                                            <button type="button" class="btn btn-dark btn-flat">Approve</button>
                                                        </a>
                                                        <a href="{{ route('bazar-details',$bazar->id) }}">
                                                            <button type="button" class="btn btn-info btn-flat">Details</button>
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
