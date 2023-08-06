@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h3><span>Add Meal</span></h3>
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
                                    <form method="POST" action="{{ route('meal.store') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Member</label>
                                                    <select class="form-control" name="user_id">
                                                        <option selected disabled>----- Select Member----</option>
                                                        <option>Mizan</option>
                                                        <option>Afik</option>
                                                        <option>Sharif</option>
                                                        <option>Nurul</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>No. of Meals</label>
                                                    <input type="number" name="meal_no" class="form-control"
                                                        placeholder="Enter Meal Number">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" name="meal_on" class="form-control">
                                        </div>

                                        <input type="submit" class="btn btn-success rounded-5" value="Save">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>3032 © Admin Board. - <a href="#">example.com</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function(e) {
            e.preventDefault();
            const originalDiv = document.getElementById('originalDiv');
            const cloneButton = document.getElementById('cloneButton');
            const clonedDivContainer = document.getElementById('clonedDivContainer');

            cloneButton.onclick = function() {
                const clonedDiv = originalDiv.cloneNode(true); // Clone the original div along with its content
                clonedDivContainer.appendChild(clonedDiv);
            };
        });
    </script>
@endpush
