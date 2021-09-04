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
            @php use App\Models\Product;$products = Product::orderBy('id')->get();
            @endphp

            <table class="table table-dark table-striped" style="margin-top: 5%;">
                <tr>
                    <th> Product Name</th>
                    <th> Price</th>
                    <th> Image</th>
                    <th> Quantity</th>
                    <th> Description</th>
                    <th> Status</th>
                    <th> Offer Price</th>

                </tr>
                @foreach($products as $product)

                <tr>

                        <td>{{$product['name']}}</td>
                        <td>{{$product['price']}}</td>
                        <td><img src="public/images/{{$product['image']}}" alt="" border="3" height="100" width="100" /></td>
                        <td>{{$product['quantity']}}</td>
                        <td>{{$product['description']}}</td>
                        <td>{{$product['status']}}</td>
                        <td>{{$product['offer_price']}}</td>
                        <td><a href="edit/{{$product['id']}}">Edit</a></td>
                        <td><a href="delete/{{$product['id']}}">Delete</a></td>



                </tr>
                    @endforeach


            </table>


    </div>


@endsection

