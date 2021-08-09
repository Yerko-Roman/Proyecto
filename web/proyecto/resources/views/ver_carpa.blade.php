@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-responsive">
                <thead class="bg-secondary text-warning">
                    <tr>
                        <td>Marca</td>
                        <td>Tela</td>
                        <td>Capacidad Plantas</td>
                        <td>Medidas</td>
                        <td>Bandeja Residuos</td>
                        <td>Precio</td>
                        <td>Accion1</td>
                        <td>Accion2</td>
                    </tr>
                </thead>
                <tbody id="tbody-carpa">

                </tbody>
            </table>
        </div>
    </div>
    <div class="d-none">
        <div class="row mt-5 molde-actualizar-car">
            <div class="mb-3">
                <label for="marcacarpa-txt" class="form-label">Marca</label>
                <input type="text" class="form-control marcacarpa-txt" required>
            </div>
            <div class="mb-3">
                <label for="tela-txt" class="form-label">Tela</label>
                <input type="text" class="form-control tela-txt" required>
            </div>
            <div class="mb-3">
                <label for="cap-num" class="form-label">Capacidad Plantas</label>
                <input type="number" min="1"class="form-control cap-num" required>
            </div>
            <div class="mb-3">
                <label for="alto-num" class="form-label">Alto</label>
                <input type="number" min="0" class="form-control alto-num" required>
            </div>
            <div class="mb-3">
                <label for="largo-num" class="form-label">Largo</label>
                <input type="number" min="0" class="form-control largo-num" required>
            </div>
            <div class="mb-3">
                <label for="ancho-num" class="form-label">Ancho</label>
                <input type="number" min="0" class="form-control ancho-num" required>
            </div>
            
            <div class="mb-3">
                <label for="bandeja-check" class="form-label">Bandeja de residuos</label>
                <div class="form-check form-check-inline">
                    <input type="radio" name="bandeja-rb" class="form-check-input bandeja-si" value="si">
                    <label for="bandeja-si" class="form-check-label">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="bandeja-rb" class="form-check-input bandeja-no" value="no">
                    <label for="bandeja-no" class="form-check-label">No</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="preciocap-num" class="form-label">Precio</label>
                <input type="number" min="0" class="form-control preciocap-num" required>
            </div>
                
            <div class="d-grid gap-1">
                <button  class="btn btn-success actualizar-btn">Actualizar</button>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/carpasService.js')}}"></script>
    <script src="{{asset('js/ver_carpa.js')}}"></script>
@endsection