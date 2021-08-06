@extends('layouts.master')

@section('contenido')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Agregar Local</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="region-select" class="form-label">Region</label>
                        <select class="form-select" id="region-select">

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="calle-txt" class="form-label">Calle</label>
                        <input type="text" id="calle-txt" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ciudad-txt" class="form-label">Ciudad</label>
                        <input type="text" id="ciudad-txt" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="local-num" class="form-label">Numero Local</label>
                        <input type="number" min="1" id="local-num" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="local-tel" class="form-label">Telefono</label>
                        <input type="tel" id="local-tel" class="form-control" required>
                    </div>
                <div class="card-footer d-grid gap-1">
                    <button id="reglocal-btn" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>     
@endsection

@section('javascript')
    <script src="{{asset('js/agregar_local.js')}}"></script>
@endsection