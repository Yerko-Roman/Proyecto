@extends('layouts.master')

@section('contenido')
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
@endsection

@section('javascript')

@endsection