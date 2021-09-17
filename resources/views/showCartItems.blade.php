@extends('mainLayout')

@section('main_content')
    @php

        @endphp
    <section class="brand_section layout_padding">
        <div class="container">

            <div class="row">
                <div class="col">
                    <table class="table table-dark table-striped" style="margin-top: 5%;">
                        <tr>
                            <th> Product Name</th>
                            <th>Total Price</th>
                            <th> Image</th>
                            <th> Quantity</th>
                            <th>Catagory</th>
                            <th>Brand</th>




                        </tr>







                        @foreach($carts as $cart)



                            <tr>

                                <td>{{\App\Models\Product::where('id',$cart->product_id)->value('name')}}</td>
                                <td>{{\App\Models\Product::where('id',$cart->product_id)->value('price') *$cart->quantity}}</td>
                                <td><img src="public/images/{{\App\Models\Product::where('id',$cart->product_id)->value('image')}}" alt="" border="3" height="100" width="100"/></td>
                                <td>X{{$cart->quantity}}</td>
                                <td>{{\App\Models\Catagory::where('id',\App\Models\Product::where('id',$cart->product_id)->value('catagory_id'))->value('name')}}</td>
                                <td>{{\App\Models\Brand::where('id',\App\Models\Product::where('id',$cart->product_id)->value('brand_id'))->value('name')}}</td>



                            </tr>
                        @endforeach


                    </table>

            </div>
        </div>
        </div>
    </section>





@endsection
