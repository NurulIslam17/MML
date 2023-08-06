@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1><span>Details</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <a href="{{ route('bazar.person_wise') }}">
                                    <button type="button" class="btn btn-info btn-flat btn-addon m-b-10 m-l-5"><i
                                        class="ti-back-left"></i>Back</button>
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
                    <div class="col-md-7 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h4>{{ $user->name }}'s Sopping List</h3>
                                <div class="table-responsive">
                                    <table class="table m-t-20 text-center bootstrap-data-table-panel" id="#myTable">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SL</th>
                                                <th>Price (BDT)</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bazars as $key => $bazar)
                                                <tr>
                                                    <td>#{{ $key + 1 }}</td>
                                                    <td>
                                                        {{ $bazar->price }}
                                                    </td>
                                                    <td>
                                                        @if ($bazar->status == 0)
                                                            <span class="badge badge-sm  badge-warning"><i
                                                                class="ti-close"></i></span>
                                                        @else
                                                            <span class="badge badge-sm badge-success"><i
                                                                class="ti-check"></i></span>
                                                        @endif
                                                    </td>
                                                    <td>

                                                        {{ \Carbon\Carbon::parse($bazar->bazar_date)->format('d M , Y') }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <p class="d-flex justify-content-end text-danger">Total : {{$bazars->sum('price')}} Taka</p>
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
