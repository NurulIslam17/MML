@extends('backend.layout')
@section('main')
<div class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Hello, <span>Welcome Here</span></h1>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                    <div class="page-title">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-stats-up color-success border-success"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Cost</div>
                                <div class="stat-digit">{{ $total_cost > 0 ? $total_cost : 0  }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Member</div>
                                <div class="stat-digit">{{ $total_users > 0 ? $total_users : 0 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Cash</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Remaining</div>
                                <div class="stat-digit">81</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title pr">
                            <h4>All Expense</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table student-data-table m-t-20">
                                    <thead>
                                        <tr>
                                            <th><label><input type="checkbox" value=""></label>ID</th>
                                            <th>Expense Type</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><label><input type="checkbox" value=""></label>#2901</td>
                                            <td>
                                                Salary
                                            </td>
                                            <td>
                                                $2000
                                            </td>
                                            <td>
                                                <span class="badge badge-primary">Paid</span>
                                            </td>
                                            <td>
                                                edumin@gmail.com
                                            </td>
                                            <td>
                                                10/05/2017
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" value=""></label>#2901</td>
                                            <td>
                                                Salary
                                            </td>
                                            <td>
                                                $2000
                                            </td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                            <td>
                                                edumin@gmail.com
                                            </td>
                                            <td>
                                                10/05/2017
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" value=""></label>#2901</td>
                                            <td>
                                                Salary
                                            </td>
                                            <td>
                                                $2000
                                            </td>
                                            <td>
                                                <span class="badge badge-primary">Paid</span>
                                            </td>
                                            <td>
                                                edumin@gmail.com
                                            </td>
                                            <td>
                                                10/05/2017
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" value=""></label>#2901</td>
                                            <td>
                                                Salary
                                            </td>
                                            <td>
                                                $2000
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Due</span>
                                            </td>
                                            <td>
                                                edumin@gmail.com
                                            </td>
                                            <td>
                                                10/05/2017
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" value=""></label>#2901</td>
                                            <td>
                                                Salary
                                            </td>
                                            <td>
                                                $2000
                                            </td>
                                            <td>
                                                <span class="badge badge-primary">Paid</span>
                                            </td>
                                            <td>
                                                edumin@gmail.com
                                            </td>
                                            <td>
                                                10/05/2017
                                            </td>
                                        </tr>
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
                        <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection