@extends('layout.plantilla')
@section('contenido2')
<div class="row">
<div class="col-md-9">
<a href="{{url('empresa/create')}}" class="pull-right">
<button class="btn btn-success">Crear Empresa</button> </a>
</div></div>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<th>Codigo de empresa</th>
<th>Nombre</th>
<th>Numero de NIT</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Fecha de contrato</th>

<th>Opciones</th>
</thead>
<tbody>
@foreach($empresa as $emp)
<tr>
<td>{{ $emp->Cod_Empresa}}</td>
<td>{{ $emp->Nombre}}</td>
<td>{{ $emp->Num_NIT}}</td>
<td>{{ $emp->Direccion}}</td>
<td>{{ $emp->Telefono}}</td>
<td>{{ $emp->Fecha_Contrato}}</td>
<td>
<a href="{{URL::action('App\Http\Controllers\EmpresaController@edit',$emp->Cod_Empresa)}}"><button class="btn btn-primary">Actualizar</button></a>
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$emp->Cod_Empresa}}">
<button type="button" class="btn btn-danger"> Eliminar</button>
</a>
</td>
</tr>
@include('empresa.modal')
@endforeach
</tbody> </table>
</div></div>
@endsection
