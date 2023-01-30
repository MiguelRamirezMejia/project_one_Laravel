@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Nuevo Movimiento</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{route('admin.movements.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="deadline" class="required">Fecha de movimiento</label>
                                <input name="deadline" type="text" class="form-control date" value="{{old('deadline')}}">
                            </div>
                            


                            <div class="form-group">
                                <label for="type">Tipo</label>
                                   <select class="form-control" id="type" name="type">
                                      <option value="compra">Compra</option>
                                          <option value="venta">Venta</option>
                                     </select>
                                        </div>
                                <div class="form-group">

    
                                <div class="form-group">
                                <label for="stock" class="required">Cantidad</label>
                                <input name="stock" type="text" class="form-control" min="0" max="100000000" value="{{old('stock')}}">

                                </div>


                           


                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('admin.movements.index')}}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
