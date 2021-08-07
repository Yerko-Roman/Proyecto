@extends('layouts.master')

@section('contenido')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Agregar Semilla</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombresem-txt" class="">Nombre Semilla</label>
                        <input type="text" id="nombresem-txt" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo-select" class="form-label">Tipo Semilla</label>
                        <select class="form-select" id="tipo-select">

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="thc-num" class="form-label">Porcentaje THC</label>
                        <input type="number" step="0.1" min="0" id="thc-num" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="cbd-num" class="form-label">Porcentaje CBD</label>
                        <input type="number" step="0.1" min="0" id="cbd-num" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="preciosem-num" class="form-label">Precio</label>
                        <input type="number" min="0" id="preciosem-num" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="regsem-btn" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/tipoService.js')}}"></script>
    <script src="{{asset('js/servicios/semillasService.js')}}"></script>
    <script src="{{asset('js/agregar_semilla.js')}}"></script>
@endsection