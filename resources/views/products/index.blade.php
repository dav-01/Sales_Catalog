@extends('layouts.app')



@section('content')

<section id="gallery">
    <div class="container">
      <div class="row">
        @foreach($products as $product)
        <div class="col-lg-4 mb-4">
          <a href="{{route('product.show', $product)}}" style="text-decoration: none ">
          <div class="card">
            <img src="https://i1.wp.com/mercaenlinea.nyc3.digitaloceanspaces.com/2018/11/comarrico_fideos_250gr.jpg?fit=1000%2C1000&ssl=1" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <h5 class="card-title">Precio: {{$product->price}}</h5>
              <h5 class="card-title">Stock: {{$product->stock}}</h5>
            </div>
          </div>
        </a>
        </div>
        @endforeach
      </div>
    </div>
  </section> 
@endsection