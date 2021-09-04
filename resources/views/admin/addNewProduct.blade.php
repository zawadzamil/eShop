@extends('admin_dashboard')
@section('admin_panel_section')

    <div class=" " style="width: 70%;height: 100%;text-align:center;  text-align: center;margin-left: 50%;margin-right: 50%;margin: auto;">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('failed'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('failed') !!}</li>
                </ul>
            </div>
        @endif

        <form action="add_product_to_database" method="POST" enctype="multipart/form-data" style="margin-top: 5%;">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" id="name" >

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="price">
            </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text" name="quantity" class="form-control" id="quantity">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea  name="description" class="form-control" id="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input  name="status" class="form-control" id="status"></div>
                </div>
            <div class="mb-3">
                <label for="offer_price" class="form-label">Offer Price</label>
                <input type="text" name="offer_price" class="form-control" id="offer_price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    @endsection

