@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
             <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de productos
                </div>
                <div class="panel-body">
                    Total Productos: {{$productos->total()}}
                </div>
               
            </div>
            {{$productos->links()}}
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Plasticoins</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <th>{{$producto->nombre}}</th>
                        <th>{{$producto->descripcion}}</th>
                        <th>{{$producto->plasticoins}}</th>
                        <th>
                            <a href="/productos/eliminar/{{$producto->id}}">
                                Eliminar
                            </a>
                        </th>
                        <th>
                            <a href="/productos/modificar/{{$producto->id}}">
                                Editar
                            </a>
                        </th>
                    </tr>
                @endforeach
              </tbody>
            </table>
            {{$productos->links()}}
        </div>
    </div>
</div>
@endsection