@extends('layout.plantilla')
@section('contenido')
<div class="row">
<div class="col-md-9">
<a href="{{url('equipo/create')}}" class="pull-right">
<button class="btn btn-success">Crear Equipo</button> </a>
</div></div>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<th>Cod Equipo</th>
<th>Nombre Equipo</th>
<th>Marca</th>
<th>Modelo</th>
<th>Serial</th>
<th>Nombre SO</th>
<th>Procesador</th>
<th>Memoria RAM</th>
<th>Tipo de Sistemas</th>
<th>Tipo de Equipo</th>
<th>Opciones</th>
</thead>
<tbody>
@foreach($equipo as $equ)
<tr>
<td>{{ $equ->Cod_Equipo}}</td>
<td>{{ $equ->Nombre_Equipo}}</td>
<td>{{ $equ->Marca}}</td>
<td>{{ $equ->Modelo}}</td>
<td>{{ $equ->Serial}}</td>
<td>{{ $equ->Nombre_SO}}</td>
<td>{{ $equ->Procesador}}</td>
<td>{{ $equ->Memoria_RAM}}</td>
<td>{{ $equ->Tipo_Sistema}}</td>
<td>{{ $equ->Tipo_Equipo}}</td>
<td>
<a href="{{URL::action('App\Http\Controllers\EquipoController@edit',$equ->Cod_Equipo)}}"><button class="btn btn-primary">Actualizar</button></a>
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$equ->Cod_Equipo}}">
<button type="button" class="btn btn-danger"> Eliminar</button>
</a>
</td>
</tr>
@include('equipo.modal')
@endforeach
</tbody> </table>
</div></div>
@endsection
