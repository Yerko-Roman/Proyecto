@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-responsive">
                <thead class="bg-secondary text-warning">
                    <tr>
                        <td>Nombre</td>
                        <td>Tipo Semilla</td>
                        <td>THC</td>
                        <td>CBD</td>
                        <td>Medidas</td>
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

@endsection