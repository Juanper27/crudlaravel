@extends('layout.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Ingresar Equipo</h4>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
{!! Form::open(array('url' => 'equipo', 'method' => 'POST', 'autocomplete' => 'off')) !!}
{{ Form::token() }}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombre_Equipo">Nombre de Equipo</label>
            <input type="text" name="Nombre_Equipo" id="Nombre_equipo" class="form-control" placeholder="Digite el nombre del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Marca">Marca</label>
            <input type="text" name="Marca" id="Marca" class="form-control" placeholder="Marca del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Modelo">Modelo</label>
            <input type="text" name="Modelo" id="Modelo" class="form-control" placeholder="Modelo del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Serial">Serial</label>
            <input type="text" name="Serial" id="Serial" class="form-control" placeholder="Serial del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombre_SO">Nombre SO</label>
            <input type="text" name="Nombre_SO" id="Nombre_SO" class="form-control" placeholder="Nombre SO">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Procesador">Procesador</label>
            <input type="text" name="Procesador" id="Procesador" class="form-control" placeholder="Procesador del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Memoria_RAM">Memoria Ram</label>
            <input type="text" name="Memoria_RAM" id="Memoria_RAM" class="form-control" placeholder="Memoria RAM del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Tipo_Sistema">Tipo Sistema</label>
            <input type="text" name="Tipo_Sistema" id="Tipo_Sistema" class="form-control" placeholder="Tipo de sistema">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Tipo_Equipo">Tipo de equipo</label>
            <input type="text" name="Tipo_Equipo" id="Tipo_Equipo" class="form-control" placeholder="Tipo de equipo">
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
            <a class="btn btn-info" type="reset" href="{{ url('equipo') }}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
