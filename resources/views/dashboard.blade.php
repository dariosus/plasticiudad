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
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h4>Administración</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/registeradmin">
                                Registrar administrador
                            </a>
                        </li>
                    </ul>
                    <h4>Productos</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/productos/crear">
                                Crear Producto
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="/productos">
                                Listar Productos
                            </a>
                        </li>
                    </ul>
                    <h4>Categorías</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/categorias/crear">
                                Crear Categoria
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="/categorias">
                                Listar Categorias
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
