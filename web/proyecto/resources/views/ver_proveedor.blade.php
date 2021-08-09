@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-responsive">
                <thead class="bg-secondary text-warning">
                    <tr>
                        <td>Nombre</td>
                        <td>Rut</td>
                        <td>Correo</td>
                        <td>Telefono</td>
                        <td>Accion1</td>
                        <td>Accion2</td>
                    </tr>
                </thead>
                <tbody id="tbody-proveedor">

                </tbody>
            </table>
        </div>
    </div>
    <div class="d-none">
        <div class="row mt-5 molde-actualizar-pro">
            <div class="mb-3">
                <label for="nomemp-txt" class="form-label">Nombre Empresa</label>
                <input type="text" class="form-control nomemp-txt" required>
            </div>

            <div class="mb-3">
                <label for="rut-txt" class="form-label">Rut</label>
                <input type="text" class="form-control rut-txt" required>
            </div>
                
            <div class="mb-3">
                <label for="prov-email" class="form-label">Correo</label>
                <input type="email" class="form-control prov-email" required>
            </div>
                
            <div class="mb-3">
                <label for="prov-tel" class="form-label">Telefono</label>
                <input type="tel" class="form-control prov-tel" required>
            </div>
                
            <div class="d-grid gap-1">
                <button  class="btn btn-success actualizar-btn">Actualizar</button>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/proveedoresService.js')}}"></script>
    <script src="{{asset('js/ver_proveedor.js')}}"></script>
@endsection