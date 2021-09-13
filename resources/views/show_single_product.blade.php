@extends('mainLayout_from_here')

@section('main_content')
    @php

        @endphp
    <section class="brand_section layout_padding">
        <div class="container">

            <div class="row">
                <div class="col">
                    <img src="../public/images/{{$data['image']}}">
                </div>
                <div class="col-md-auto">
                    <h4 style="padding-right: 30%;">{{$data['name']}}</h4><br>
                    <h4>&#2547;<s>{{$data['price']}}</s></h4>
                    <h1>&#2547;{{$data['offer_price']}}</h1>
                    <form action="{{route('addToCart')}}" method="POST">
                        @csrf
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" id="quantity" placeholder="1" min="1" max="10000" required>
                        <input type="hidden" name="product_id" value="{{$data['id']}}">
                        <br>

                        <button class="btn  btn-dark" type="submit">Add to Cart</button>


                    </form>
                </div>

            </div>
        </div>
    </section>





@endsection
