@extends('layouts.master')

@section('contenido')
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Filtrar</span>
                </div>
                <div class="card-body">
                    <select class="form-select" id="filtro-semilla">
                        <option value="todos">Todos</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-responsive">
                <thead class="bg-secondary text-warning">
                    <tr>
                        <td>Nombre</td>
                        <td>Tipo Semilla</td>
                        <td>THC</td>
                        <td>CBD</td>
                        <td>Precio</td>
                        <td>Accion1</td>
                        <td>Accion2</td>
                    </tr>
                </thead>
                <tbody id="tbody-semilla">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/semillasService.js')}}"></script>
    <script src="{{asset('js/servicios/tipoService.js')}}"></script>
    <script src="{{asset('js/ver_semilla.js')}}"></script> 
@endsection