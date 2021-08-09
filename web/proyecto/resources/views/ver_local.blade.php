@extends('layouts.master')

@section('contenido')
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Filtrar</span>
                </div>
                <div class="card-body">
                    <select class="form-select" id="filtro-local">
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
                        <td>Region</td>
                        <td>Ciudad</td>
                        <td>Calle</td>
                        <td>Numero Local</td>
                        <td>Telefono</td>
                        <td>Accion1</td>
                        <td>Accion2</td>
                    </tr>
                </thead>
                <tbody id="tbody-local">

                </tbody>
            </table>
        </div>
    </div>
    <div class="d-none">
        <div class="row mt-5 molde-actualizar-loc">
            <div class="mb-3">
                <label for="region-select" class="form-label">Region</label>
                <select class="form-select region-select">

                </select>
            </div>
            <div class="mb-3">
                <label for="calle-txt" class="form-label">Calle</label>
                <input type="text" class="form-control calle-txt" required>
            </div>
            <div class="mb-3">
                <label for="ciudad-txt" class="form-label">Ciudad</label>
                <input type="text" class="form-control ciudad-txt" required>
            </div>
            <div class="mb-3">
                <label for="local-num" class="form-label">Numero Local</label>
                <input type="number" min="1" class="form-control local-num" required>
            </div>
            <div class="mb-3">
                <label for="local-tel" class="form-label">Telefono</label>
                <input type="tel" class="form-control local-tel" required>
            </div>

            <div class="d-grid gap-1">
                <button  class="btn btn-success actualizar-btn">Actualizar</button>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/localesService.js')}}"></script>
    <script src="{{asset('js/servicios/regionesService.js')}}"></script>
    <script src="{{asset('js/ver_local.js')}}"></script>
@endsection