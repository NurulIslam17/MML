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
                                <a href="{{ route('bazar.index') }}">
                                    <button type="button" class="btn btn-primary">Back</button>
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
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h4>Bazar List</h3>
                                <div class="table-responsive">
                                    <table class="table m-t-20 text-center bootstrap-data-table-panel" id="#myTable">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SL</th>
                                                <th>Item</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bazar_details as $key => $bazar)
                                                <tr>
                                                    <td>#{{ $key + 1 }}</td>
                                                    <td>
                                                        {{ $bazar->item }}
                                                    </td>
                                                    <td>
                                                        {{ $bazar->item_price }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <p>Total : {{$totla_price}} Taka</p>
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
