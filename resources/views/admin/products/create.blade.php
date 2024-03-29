@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Producto') }}</div>


                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('product.store') }} ">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Codigo') }}</label>

                                <div class="col-md-6">
                                    <input id="referencia" type="text" class="form-control" name="code" required
                                        autocomplete="referencia" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nombre del producto') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Precio') }}</label>

                                <div class="col-md-6">
                                    <input id="precio" type="text"
                                        class="form-control @error('price') is-invalid @enderror" name="price" required
                                        autocomplete="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('stock') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="stock" required autocomplete="stock"
                                        autofocus>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('img') }}</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" id="img" name="img" required autocomplete="img"
                                        autofocus>
                                </div>
                            </div>
                            
                            <div class="">
                                <center><img id="imagenSeleccionada" style="max-height: 200px" class="mb-4 border"></center>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Crear Producto') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
                $('#img').change(function() {
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        $('#imagenSeleccionada').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                });
            })
    </script>
@endsection
