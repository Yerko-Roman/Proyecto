@extends('layouts.master')

@section('contenido')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Agregar Carpa</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="marcacarpa-txt" class="form-label">Marca</label>
                        <input type="text" id="marcacarpa-txt" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tela-txt" class="form-label">Tela</label>
                        <input type="text" id="tela-txt" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="cap-num" class="form-label">Capacidad Plantas</label>
                        <input type="number" min="1" id="cap-num" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="alto-num" class="form-label">Alto</label>
                        <input type="number" min="0" id="alto-num" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="largo-num" class="form-label">Largo</label>
                        <input type="number" min="0" id="largo-num" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ancho-num" class="form-label">Ancho</label>
                        <input type="number" min="0" id="ancho-num" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="bandeja-check" class="form-label">Bandeja de residuos</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="bandeja-rb" id="bandeja-si" class="form-check-input">
                            <label for="bandeja-si" class="form-check-label">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="bandeja-rb" id="bandeja-no" class="form-check-input" checked>
                            <label for="bandeja-no" class="form-check-label">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="preciocap-num" class="form-label">Precio</label>
                        <input type="number" min="0" id="preciocap-num" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="regcarpa-btn" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>     
@endsection

@section('javascript')

@endsection