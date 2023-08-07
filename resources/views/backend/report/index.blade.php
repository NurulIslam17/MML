@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h3><span>Report List</span></h3>
                        </div>
                    </div>
                </div>
                <!-- /# column -->

                @if (auth()->user()->type == 1)
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    {{-- <a href="{{ route('deposite.create') }}">
                                        <button type="button" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5"><i
                                                class="ti-plus"></i>Create</button>
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
                    <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge badge-info"> <strong> Meal Rate : </strong> {{ round($meal_rate, 2) }}
                                    BDT</span>
                                <div class="table-responsive">
                                    <table class="table m-t-20 text-center bootstrap-data-table-panel" id="#myTable">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SL</th>
                                                <th>Member</th>
                                                <th>Deposite(BDT)</th>
                                                <th>Cost(Shopping)</th>
                                                <th>Total Meal</th>
                                                <th>Meal Cost(BDT)</th>
                                                <th>Return(BDT)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $key => $item)
                                                <tr class="bg-{{ $item->is_due_paid == 1 ? 'secondary' : '' }}">
                                                    <td>#{{ $key + 1 }}</td>
                                                    <td>
                                                        {{ $item->name }}
                                                    </td>
                                                    @php
                                                        $deposite = (int) 0;
                                                        foreach ($item->deposites as $key => $value) {
                                                            $deposite = $deposite + $value->amount;
                                                        }
                                                    @endphp
                                                    <td>
                                                        {{ $deposite }}
                                                    </td>

                                                    @php
                                                        $cost = (int) 0;
                                                        foreach ($item->bazars as $key => $value) {
                                                            if ($value->status == 1) {
                                                                $cost = $cost + $value->price;
                                                            }
                                                        }
                                                    @endphp
                                                    <td>
                                                        {{ $cost }}
                                                    </td>

                                                    @php
                                                        $meal_cost = (int) 0;
                                                        foreach ($item->meals as $key => $value) {
                                                            $meal_cost = $meal_cost + $value->meal_no;
                                                        }
                                                    @endphp
                                                    <td>
                                                        {{ $meal_cost }}
                                                    </td>
                                                    <td>
                                                        {{ round($meal_cost * $meal_rate, 2) }}
                                                    </td>
                                                    @php
                                                        $return = $deposite - $meal_cost * $meal_rate;
                                                    @endphp
                                                    <td class="bg-{{ $return < 0 ? 'danger' : 'success' }}">
                                                        {{ round($return, 2) }}
                                                    </td>

                                                    <td>
                                                        @if (auth()->user()->type == 1)
                                                            @if ($item->is_due_paid != 1)
                                                                <a href="{{ route('report.paid_status', $item->id) }}">
                                                                    <button type="button"
                                                                        class="btn btn-danger btn-flat py-0"><i
                                                                            class="ti-close"></i></button>
                                                                </a>
                                                            @endif
                                                        @endif
                                                        <a href="#">
                                                            <button type="button" class="btn btn-info btn-flat py-0"><i
                                                                    class="ti-eye"></i></button>
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
