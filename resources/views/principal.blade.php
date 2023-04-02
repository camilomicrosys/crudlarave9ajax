@extends('layout.plantilla')
@section('contenido')
@include('table')
@endsection

@section('script')
<!-- Este siempre sera llamado por que siempre se muestra en la vista principal el agregar-->
<script src="{{asset('ajax/agregar.js')}}"></script>
@endsection

