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
                            <a href="{{  route('bazar.index') }}">
                                <button type="button" class="btn btn-info btn-flat btn-addon m-b-10 m-l-5"><i class="ti-view-list"></i>List</button>
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
                                <form method="POST" action="{{ route('bazar.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" name="price" class="form-control" placeholder="Enter Price">
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>

                                    <div class="form-group my-0 py-0">
                                        <label>Item Wise Price</label>
                                        <div class="">
                                            <a id="cloneButton" onclick="add(this)" class="btn btn-sm btn-success"><span class="text-light">+</span></a>
                                        </div>
                                    </div>
                                    <div id="originalDiv">
                                        <div class="row my-0 py-0">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="item[]" required class="form-control" placeholder="Enter Item">
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" name="item_price[]" required class="form-control" placeholder="Enter Price">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div id="clonedDivContainer"></div>
                                    <input type="submit" class="btn btn-success rounded-5" value="Save">
                                    {{-- <a href="{{ route('bazar.store')}}" type="submit" class="btn btn-sm btn-info">Save</a> --}}
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
       document.addEventListener('DOMContentLoaded', function (e) {
        e.preventDefault();
    const originalDiv = document.getElementById('originalDiv');
    const cloneButton = document.getElementById('cloneButton');
    const clonedDivContainer = document.getElementById('clonedDivContainer');

    cloneButton.onclick = function () {
        const clonedDiv = originalDiv.cloneNode(true); // Clone the original div along with its content
        clonedDivContainer.appendChild(clonedDiv);
    };
});
    </script>
@endpush