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
    <div class="d-none">
        <div class="row mt-5 molde-actualizar-sem">
            <div class="mb-3">
                <label for="nombresem-txt" class="">Nombre Semilla</label>
                <input type="text" class="form-control nombresem-txt" required>
            </div>
            <div class="mb-3">
                <label for="tipo-select" class="form-label">Tipo Semilla</label>
                <select class="form-select tipo-select">

                </select>
            </div>
            <div class="mb-3">
                <label for="thc-num" class="form-label">Porcentaje THC</label>
                <input type="number" step="0.1" min="0" class="form-control thc-num" required>
            </div>
            <div class="mb-3">
                <label for="cbd-num" class="form-label">Porcentaje CBD</label>
                <input type="number" step="0.1" min="0" class="form-control cbd-num" required>
            </div>
            <div class="mb-3">
                <label for="preciosem-num" class="form-label">Precio</label>
                <input type="number" min="0" class="form-control preciosem-num" required>
            </div>
                
            <div class="d-grid gap-1">
                <button  class="btn btn-success actualizar-btn">Actualizar</button>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/semillasService.js')}}"></script>
    <script src="{{asset('js/servicios/tipoService.js')}}"></script>
    <script src="{{asset('js/ver_semilla.js')}}"></script> 
@endsection