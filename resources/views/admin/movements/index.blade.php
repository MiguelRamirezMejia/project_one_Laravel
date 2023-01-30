@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Movimientos</h1>
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

                        <a href="{{ route('admin.movements.create') }}" class="btn btn-primary mb-3">Nuevo movimiento</a>

                        <table class="table table-bordered" id="movements_table">
                            <thead>
                                <tr>
                                    
                                    <th>Fecha de movimiento</th>
                                    <th>Tipo de movimiento</th>
                                    <th>Nombre de producto</th>
                                    <th>Cantidad de movimiento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($movements as $movement)
                                <tr>
                                        <td>{{ $movement->date_movement }}</td>
										<td>{{ $movement->product->name }}</td>
										<td>{{ $movement->amount }}</td>
										<td>{{ $movement->type }}</td>

                                    <td>
                                        <a href="{{ route('admin.movements.edit', $movement->id) }}" class="btn btn-success">
                                            Editar
                                        </a>

                                        <form action="{{ route('admin.movements.destroy', $movement->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el movimiento?')" style="display: inline-block;">
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
        $('#movements_table').DataTable();
    });
</script>
@endsection
