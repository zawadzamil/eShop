@extends('othersLayout')
@section('bodyParts')

<div>
    <!-- Session Status -->
    @if (\Session::has('failed'))
        <div class="alert alert-danger">
            <ul>
                <li style="color: red;text-align: center;">{!! \Session::get('failed') !!}</li>
            </ul>
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li style="text-align: center;">{!! Session::get('success') !!}</li>
            </ul>
        </div>
@endif




    <!-- brand section -->
</div>
<div class="m-5 mt-3">
    <h3>
        Ordered Products
    </h3>
</div>
<div class="row m-5">
    <div class="col-md-12 col-lg-9 ">
        @foreach($carts as $cart)
        <div class="product  ">
            <div class="row custom-border mb-2 bg-light ">
                <div class="col-md-4 text-center mt-auto mb-auto">
                    <img class="cm-image" src="public/images/{{\App\Models\Product::where('id',$cart->product_id)->value('image')}}">
                </div>
                <div class="col-md-8 ">
                    <div class="info m-2">
                        <div>
                            <h3 class="mt-auto mb-auto">{{\App\Models\Product::where('id',$cart->product_id)->value('name')}}</h3>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 ">
                                <h5 class="mt-auto mb-auto">Unit Price :</h5>
                            </div>
                            <form  action="{{url('updateCart',$cart->id)}}" method="post" class="col-md-7">
                                @csrf
                                <div class="row justify-content-md-between ">
                                    <div class="col col-lg-4 mb-auto mt-auto">
                                        <span style="font-size: large" class="fw-bold">&#2547; {{\App\Models\Product::where('id',$cart->product_id)->value('offer_price')}}</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="cm-input-field" type="number" name="quantity" min="1" value="{{$cart->quantity}}">
                                    </div>
                                    <div class="col col-lg-auto mb-auto mt-auto">

                                        <button class="add-button justify-content-center" type="submit">Add</button>


                                    </div>


                                </div>
                            </form>

                        </div>
                        <hr>
                        @php

$price_per_product = \App\Models\Product::where('id',$cart->product_id)->value('price');
$quantity_per_product = $cart->quantity;
$total_per_product = $price_per_product*$quantity_per_product;




                        @endphp
                        <div >
                            <p class="mt-auto mb-auto">
                                <span class="fw-bold">Price : &#2547; {{$total_per_product}}</span> </p>
                        </div>
                        <div class="text-end">
                        <a href="delete_cart_item/{{$cart->id}}"> <button class="remove-button" style="background-color:#ff070f;">Remove</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
        @php
        $total =0;
$delevary_cost =0;
foreach ($carts as $cart)
    {
        $price = \App\Models\Product::where('id',$cart->product_id)->value('price');
        $total = $total + ($price * $cart->quantity);
        $catagory_Id = \App\Models\Product::where('id',$cart->product_id)->value('catagory_id');
        if($catagory_Id==1)
            {
                $delevary_cost =$delevary_cost+(200*$cart->quantity);
            }
        elseif ($catagory_Id==4)
        {
            $delevary_cost =$delevary_cost+(150*$cart->quantity);
        }
         elseif ($catagory_Id==10)
        {
            $delevary_cost =$delevary_cost+(120*$cart->quantity);
        }
        elseif ($catagory_Id==8)
        {
            $delevary_cost =$delevary_cost+(100*$cart->quantity);
        }
         elseif ($catagory_Id==5)
        {
            $delevary_cost =$delevary_cost+(50*$cart->quantity);
        }

    }
        @endphp

        @php
        $totalAmo = $total+$delevary_cost;
           Session::put('totalAmo',$totalAmo);
        @endphp


    </div>
    <!-- brand section -->

    <div class="col-md-12 col-lg-3 ">
        <div class="">
            <div class="summary custom-border">
                <h3>Summary</h3>
                <div class="summary-item"><span class="text">Subtotal</span><span class="price">&#2547; {{$total}}</span></div>
                <div class="summary-item"><span class="text">Discount</span><span class="price">&#2547;0</span></div>
                <div class="summary-item"><span class="text">Shipping</span><span class="price">&#2547;{{$delevary_cost}}</span></div>
                <div class="summary-item"><span class="text">Total</span><span class="price">&#2547; {{$total + $delevary_cost}}</span></div>
              <a href="checkoutCash"> <button type="button" class="btn btn-primary btn-lg btn-block">Cash On Delivery</button></a>
              <a href="checkout/{{$total + $delevary_cost}}" ><button type="button" class="btn btn-primary btn-lg btn-block">Online Payment</button></a>
            </div>

        </div>
    </div>

</div>





<!-- end brand section -->
    @endsection



