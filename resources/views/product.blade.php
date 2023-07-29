@extends('layout.master')

@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Product</h6>
        </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

    <main class="container_product">
 
        <!-- Left Column / Headphones Image -->
        <div class="left-column">
          <img data-image="red" class="active" src="{{ asset('template/image/product/'.$data['product']->image) }}" alt="">
        </div>
       
       
        <!-- Right Column -->
        <div class="right-column">
       
          <!-- Product Description -->
          <div class="product-description">
            <h1>{{$data['product']->name}}</h1>
            <br>
            <p>{{$data['product']->description}}</p>
          </div>
       
          <!-- Product Configuration -->
          <div class="product-configuration">

       
            <!-- Cable Configuration -->
            <div class="cable-config">
              <span>Cable configuration</span>
       
              <div class="cable-choose">
                    <input type="number" name="qty" id="">
              </div>
            </div>
          </div>
       
          <!-- Product Pricing -->
          <div class="product-price">
            <span>{{$data['product']->price_sale ?? $data['product']->price}} $</span>
          </div> 
          <div class="product-price">
            <a href="#" class="cart-btn">Add to cart</a>
          </div>
        </div>
      </main>
@endsection