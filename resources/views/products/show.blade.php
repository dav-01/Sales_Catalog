@extends('layouts.app')

@section('content')

<div class="container" role="main">
  <form method="POST" action="{{route('order.store', $product)}}">
  <div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-7">
        <img src="https://i1.wp.com/mercaenlinea.nyc3.digitaloceanspaces.com/2018/11/comarrico_fideos_250gr.jpg?fit=1000%2C1000&ssl=1" class="img-fluid rounded-start" alt="..." style="height: 400px">
      </div>
      
      <div class="col-md-5">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">$ {{$product->price}}</p>
          <p class="card-text">Stock: {{$product->stock}}</p>
        <div class="input-group">
          <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="3">4</option>
            <option value="3">5</option>
          </select>
          
            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
         
          
        </div>
        </div>
      </div>
    
    </div>
  </div>
</form>
</div>





  
    
@endsection

