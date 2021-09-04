@extends('mainLayout')

@section('main_content')

@php use App\Models\Product;$products = Product::orderBy('id')->get();
@endphp

  <!-- brand section -->

  <section class="brand_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Featured Brands
        </h2>
      </div>
      <div class="brand_container layout_padding2">

@foreach($products as $product)
        <div class="box">
          <a href="">
            <div class="new">
              <h5>
                New
              </h5>
            </div>
            <div class="img-box">
              <img src="public/images/{{$product['image']}}" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                {{$product['price']}} BDT
              </h6>
              <h6>
                {{$product['name']}}
              </h6>
            </div>
          </a>
        </div>

@endforeach


      </div>
      <a href="" class="brand-btn">
        See More
      </a>
    </div>
  </section>

  <!-- end brand section -->



  <!-- end info_section -->



 @endsection
