@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Catálogo</h1>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail cargarProducto" href="#idModal" data-toggle="modal" data-productoId="1">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb" >
                    <a class="thumbnail cargarProducto" href="#idModal" data-toggle="modal" data-productoId="2">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail cargarProducto" href="#idModal" data-toggle="modal" data-productoId="3">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail cargarProducto" href="#idModal" data-toggle="modal" data-productoId="4">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>        
            </div>

            <div class="modal fade" id="idModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                  <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                      <p id="plasticoins">This is a large modal.</p>
                      <p id="description">This is a large modal.</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
      </div>
@endsection
