@extends('layouts.app')

@section('content')
    <div class="row" style="margin: 20px">
        <div class="col-12">
            <h1 style="text-align: center">Productos <i class="fa fa-box"></i></h1>
            <a href="{{ route('product.create') }}" class="btn btn-success mb-2">Agregar</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Existencia</th>
                            <th colspan="2" style="text-align: center">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('product.edit', $product) }}">Editar
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('product.destroy', [$product]) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Eliminar
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
