@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Productos</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Nuevo Producto</a>

                        <table class="table table-bordered" id="products_table">
                            <thead>
                                <tr>
                                    
                                    <th>Nombre</th>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                   
                                    <th>Valor compra</th>
                                    <th>Valor venta</th>                                
                                    <th>Stock</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                              
                                            <td>{{ $product->name }}</td>
											<td>{{ $product->code }}</td>
											<td>{{ $product->description }}</td>
                                           
											<td>{{ $product->value_buy }}</td>
											<td>{{ $product->value_sale }}</td>
											<td>{{ $product->stock }}</td>
											

                                            <td>
                                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-success">
                                            Editar
                                        </a>

                                        <form action="{{ route('admin.products.destroy', $product->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el producto?')" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#products_table').DataTable();
    });
</script>
@endsection
