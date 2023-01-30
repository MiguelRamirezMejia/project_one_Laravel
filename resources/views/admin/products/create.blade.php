@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Nuevo Producto</h1>
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

                        <form method="POST" action="{{route('admin.products.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="required">Nombre Producto</label>
                                <input type="text" name="name" id="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Ingrese el nombre del producto" value="{{old('name', '')}}">
                                @if ($errors->has('name'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="code" class="required">Código</label>
                                <input type="text" name="code" id="code" class="form-control {{$errors->has('code') ? 'is-invalid' : ''}}" placeholder="Ingrese el código de la categoría" value="{{old('code', '')}}">
                                @if ($errors->has('code'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('code') }}</strong>
                                </span>
                                @endif

                            <div class="form-group">
                                <label for="description" class="required">Descripción</label>
                                <textarea name="description" class="form-control">{{old('description', '')}}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>


                           


                            <div class="form-group">
                                <label for="value_buy" class="required">Precio de compra</label>
                                <input name="value_buy" type="text" class="form-control" min="0" max="100000000" value="{{old('value_buy')}}">

                            </div>


                            <div class="form-group">
                                <label for="value_sale" class="required">Precio de venta</label>
                                <input name="value_sale" type="text" class="form-control" min="0" max="100000000" value="{{old('value_sale')}}">

                            </div>

                            
                            <div class="form-group">
                                <label for="stock" class="required">Existencias</label>
                                <input name="stock" type="text" class="form-control" min="0" max="100000000" value="{{old('stock')}}">

                            </div>

                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('admin.products.index')}}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar
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
