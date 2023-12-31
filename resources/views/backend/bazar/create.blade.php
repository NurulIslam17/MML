@extends('backend.layout')
@section('main')
    <div class="main">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1><span>Create Bazar</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <a href="{{ route('bazar.index') }}">
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
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('bazar.store') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">


                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="number" name="price" class="form-control"
                                                        placeholder="Enter Price">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" name="date" class="form-control">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group my-0 py-0">
                                            <label>Item Wise Price</label>
                                        </div>
                                        <div class="original-div">
                                            <div class="clone-div">
                                                <div class="row my-0 py-0">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="items[]" required
                                                                class="form-control" placeholder="Enter Item">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="number" name="item_price[]" required
                                                                class="form-control" placeholder="Enter Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="">
                                                            <button type="button" id="clone-button"
                                                                class="btn btn-sm btn-success addBtn"><span
                                                                    class="text-light">+</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="cloned-container"></div>
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
    <script>
        let cloneCounter = 0;
        let max = 20;
        document.getElementById('clone-button').addEventListener('click', function() {

            let originDiv = document.querySelector('.original-div');
            if (cloneCounter < 10)
            {
                $('.original-div').append(`<div class="clone-div`+cloneCounter+`">
                                    <div class="row my-0 py-0">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="items[]" required
                                                    class="form-control" placeholder="Enter Item">
                                            </div>

                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="number" name="item_price[]" required
                                                    class="form-control" placeholder="Enter Price">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="">
                                                <a  class="btn btn-sm btn-danger remove-btn" id = "`+cloneCounter+`"><span
                                                        class="text-light">-</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`);
            }
            cloneCounter++;
        });

        $(document).on('click', '.remove-btn', function(e) {
            e.preventDefault();
            var removeButtonId = $(this).attr('id');
            $('.clone-div' + removeButtonId + '').remove();
            cloneCounter--;
        });
    </script>
@endpush
