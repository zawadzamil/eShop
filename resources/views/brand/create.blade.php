@extends('admin_dashboard_from_here')
@section('admin_panel_section')

    <div class=" "
         style="width: 70%;height: 100%;text-align:center;  text-align: center;margin-left: 50%;margin-right: 50%;margin: auto;">
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


        <form action="add_brand_to_db" method="POST" enctype="multipart/form-data" style="margin-top: 5%;">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Brand Name</label>
                <input type="text" name="name" class="form-control" id="name" required>


                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description"></textarea>
                </div>


            </div>


            <button type="submit" class="btn btn-danger" style="margin-top: 2%;">Submit</button>
        </form>


    </div>


@endsection

