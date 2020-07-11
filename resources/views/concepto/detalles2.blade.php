@extends('layouts.doctor')

@section('content')
<div class="container ">
  <ol class="breadcrumb col-lg-3">
    <li ><a href="{!!URL::to('/infante')!!}">Inicio</a></li>
    <li > Resultados </li>
  </ol>
</div>

@if( ! empty($conceptos))

@include('concepto.especificos.especificos1')

@elseif( ! empty($conceptos))

@include('concepto.especificos.especificos2')

@elseif( ! empty($cubos))

@include('concepto.especificos.especificos3')

@endif


@endsection
