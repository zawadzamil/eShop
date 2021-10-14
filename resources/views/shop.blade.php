

@extends('othersLayout')
@section('bodyParts')
    @php
    $products = \App\Models\Product::where('catagory_id',5)->get();
    @endphp

<!-- brand section -->

<section class=" section-body container" >

    <div class="container">
        <h4 class="mb-3">Chair</h4>
        <div class="row row-cols-1  row-cols-md-3 row-cols-lg-4 g-4 " >
            @foreach($products as $product)
            <div class="col " style="margin-top: 5%;">
                <div class="card h-100 w-100 my-card wrapper">
                    <div class="favourite-logo">

                        <i id="love-icon" class="fas fa-heart text-danger"></i>
                    </div>
                    <img src="public/images/{{$product->image}}" class="custom-card-img " alt="...">
                    <div class="card-body ">
                        <h5 class="card-title my-card-space title-name">{{$product->name}}</h5>
                        <div class="desc-size">
                            <p class="my-card-space ">{{$product->description}}</p>
                        </div>


{{--                                    ....     REVIEW SECTION......
                                     <p class="my-card-space mt-1"><small>Review :--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star checked"></span>--}}
{{--                                <span class="fa fa-star"></span>--}}
{{--                                <span class="fa fa-star"></span>--}}
{{--                                (3/5)--}}
{{--                            </small></p>

                                                      ............end Review Section ..............
--}}
                        @if(($product->price)==($product->offer_price))
                        <p class="my-card-space color-price text-end">&#2547;{{$product->price}}</p>
                            @else
                            <p class="my-card-space color-price text-end"><strike>&#2547;{{$product->price}}</strike> {{$product->offer_price}}</p>

                        @endif
                        <br>

                        <div class=" text-center ">
                       <a  href="show_single_product/{{$product['id']}}">
                           <button class="add-to-card-button" type="button">Add to Cart</button>
                       </a>


                        </div>
                    </div>
                </div>
            </div>
                @endforeach



        </div>
        <button class="btn btn-primary mt-2">See More</button>

        <h4 class="mb-3 mt-3">Table</h4>
        <div class="row row-cols-1  row-cols-md-3 row-cols-lg-4 g-4 ">
            <div class="col ">
                <div class="card h-100 w-100 my-card wrapper">
                    <div class="favourite-logo">

                        <i id="love-icon" class="fas fa-heart text-danger"></i>
                    </div>
                    <img src="public/mainAsset/images/t-1.jpg" class="custom-card-img " alt="...">
                    <div class="card-body ">
                        <h5 class="card-title my-card-space title-name">Card title</h5>
                        <div class="desc-size">
                            <p class="my-card-space ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laborum
                                earum error
                                commodi obcaecati? Obcaecati repellat placeat sit neque temporibus inventore
                                adipisci
                                dolore ullam,
                                soluta, rem earum reprehenderit, voluptatem nisi iste?</p>
                        </div>


                        <p class="my-card-space mt-1"><small>Review :
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                (3/5)
                            </small></p>
                        <p class="my-card-space color-price text-end">$1200.00</p>

                        <br>

                        <div class=" text-center ">
                            <button class="add-to-card-button" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card h-100 w-100 my-card wrapper">
                    <div class="favourite-logo">

                        <i id="love-icon" class="fas fa-heart text-danger"></i>
                    </div>
                    <img src="public/mainAsset/images/t-1.jpg" class="custom-card-img " alt="...">
                    <div class="card-body ">
                        <h5 class="card-title my-card-space title-name">Card title</h5>
                        <div class="desc-size">
                            <p class="my-card-space ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laborum
                                earum error
                                commodi obcaecati? Obcaecati repellat placeat sit neque temporibus inventore
                                adipisci
                                dolore ullam,
                                soluta, rem earum reprehenderit, voluptatem nisi iste?</p>
                        </div>


                        <p class="my-card-space mt-1"><small>Review :
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                (3/5)
                            </small></p>
                        <p class="my-card-space color-price text-end">$1200.00</p>

                        <br>

                        <div class=" text-center ">
                            <button class="add-to-card-button" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card h-100 w-100 my-card wrapper">
                    <div class="favourite-logo">

                        <i id="love-icon" class="fas fa-heart text-danger"></i>
                    </div>
                    <img src="public/mainAsset/images/t-1.jpg" class="custom-card-img " alt="...">
                    <div class="card-body ">
                        <h5 class="card-title my-card-space title-name">Card title</h5>
                        <div class="desc-size">
                            <p class="my-card-space ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laborum
                                earum error
                                commodi obcaecati? Obcaecati repellat placeat sit neque temporibus inventore
                                adipisci
                                dolore ullam,
                                soluta, rem earum reprehenderit, voluptatem nisi iste?</p>
                        </div>


                        <p class="my-card-space mt-1"><small>Review :
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                (3/5)
                            </small></p>
                        <p class="my-card-space color-price text-end">$1200.00</p>

                        <br>

                        <div class=" text-center ">
                            <button class="add-to-card-button" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card h-100 w-100 my-card wrapper">
                    <div class="favourite-logo">

                        <i id="love-icon" class="fas fa-heart text-danger"></i>
                    </div>
                    <img src="public/mainAsset/images/t-1.jpg" class="custom-card-img " alt="...">
                    <div class="card-body ">
                        <h5 class="card-title my-card-space title-name">Card title</h5>
                        <div class="desc-size">
                            <p class="my-card-space ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laborum
                                earum error
                                commodi obcaecati? Obcaecati repellat placeat sit neque temporibus inventore
                                adipisci
                                dolore ullam,
                                soluta, rem earum reprehenderit, voluptatem nisi iste?</p>
                        </div>


                        <p class="my-card-space mt-1"><small>Review :
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                (3/5)
                            </small></p>
                        <p class="my-card-space color-price text-end">$1200.00</p>

                        <br>

                        <div class=" text-center ">
                            <button class="add-to-card-button" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <button class="btn btn-primary mt-2">See More</button>


    </div>

</section>

<!-- end brand section -->

@endsection

