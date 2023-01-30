@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Editar Producto</h1>
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
                        <form method="POST" action="{{route('admin.products.update', $product->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="required">Nombre de Producto</label>
                                <input type="text" name="name" id="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Ingrese el nombre del producto" value="{{old('name', $product->name)}}">
                                @if ($errors->has('name'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="deadline" class="required">Código</label>
                                <input name="deadline" type="text" class="form-control date" value="{{ old('deadline', $product->deadline) }}">
                            </div>



                            <div class="form-group">
                                <label for="description" class="required">Descripción</label>
                                <textarea name="description" class="form-control">{{old('description', $product->description)}}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="deadline" class="required">Categoría</label>
                                <input name="deadline" type="text" class="form-control date" value="{{ old('deadline', $product->deadline) }}">
                            </div>
                            
                            

                            <div class="form-group">
                                <label for="deadline" class="required">Precio de compra</label>
                                <input name="deadline" type="text" class="form-control date" value="{{ old('deadline', $product->deadline) }}">
                            </div>

                            <div class="form-group">
                                <label for="deadline" class="required">Precio de venta</label>
                                <input name="deadline" type="text" class="form-control date" value="{{ old('deadline', $product->deadline) }}">
                            </div>



                            <div class="form-group">
                                <label for="deadline" class="required">Existencias</label>
                                <input name="deadline" type="text" class="form-control date" value="{{ old('deadline', $product->deadline) }}">
                            </div>

                          


                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('admin.products.index')}}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Editar
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
