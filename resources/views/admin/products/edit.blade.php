@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear Producto') }}</div>
                

                <div class="card-body">
                    <form method="POST" action="{{route('product.update', $product) }}">
                        @method("PUT")
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Codigo') }}</label>

                            <div class="col-md-6">
                                <input id="referencia" type="text" class="form-control @error('name') is-invalid @enderror" name="code" value="{{$product->code}}" required autocomplete="referencia" autofocus >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre del producto') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$product->name}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="price" value="{{$product->price}}" required autocomplete="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Stock') }}</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="stock" value="{{$product->stock}}"  required autocomplete="existencia" autofocus >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Img') }}</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="img" {{$product->img}}  required autocomplete="foto" autofocus >
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar Producto') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection