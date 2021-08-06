@extends('layouts.master')

@section('contenido')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Agregar Proveedor</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nomemp-txt" class="form-label">Nombre Empresa</label>
                        <input type="text" id="nomemp-txt" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="rut-txt" class="form-label">Rut</label>
                        <input type="text" id="rut-txt" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="prov-email" class="form-label">Correo</label>
                        <input type="email" id="prov-email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="prov-tel" class="form-label">Telefono</label>
                        <input type="tel" id="prov-tel" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="regprov-btn" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>    
@endsection

@section('javascript')

@endsection