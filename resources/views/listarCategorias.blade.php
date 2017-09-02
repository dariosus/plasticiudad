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
                    Listado de categorias
                </div>
                <div class="panel-body">
                    Total Categorias: {{$categorias->total()}}
                </div>
               
            </div>
            {{$categorias->links()}}
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <th>{{$categoria->nombre}}</th>
                        <th>{{$categoria->descripcion}}</th>
                        <th>
                            <a href="/categorias/eliminar/{{$categoria->id}}">
                                Eliminar
                            </a>
                        </th>
                        <th>
                            <a href="/categorias/modificar/{{$categoria->id}}">
                                Editar
                            </a>
                        </th>
                    </tr>
                @endforeach
              </tbody>
            </table>
            {{$categorias->links()}}
        </div>
    </div>
</div>
@endsection