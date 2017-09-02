@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Producto</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/productos/crear" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                            <label for="descripcion" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" required autofocus>

                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('plasticoins') ? ' has-error' : '' }}">
                            <label for="plasticoins" class="col-md-4 control-label">PlastiCoins</label>

                            <div class="col-md-6">
                                <input id="plasticoins" type="text" class="form-control" name="plasticoins" value="{{ old('plasticoins') }}" required autofocus>

                                @if ($errors->has('plasticoins'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('plasticoins') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="categoria_id" class="col-md-4 control-label">Categoria: </label>

                            <div class="col-md-6">
                                <select name="categoria_id" class="form-control">
                                	@foreach($categorias as $categoria)
										<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                	@endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto" class="col-md-4 control-label">Foto: </label>

                            <div class="col-md-6">
                                <input id="foto" class="form-control" type="file" name="foto">
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear Producto
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