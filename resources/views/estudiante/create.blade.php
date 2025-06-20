
@extends('layouts.app')
@section('content')

@if ($errors->any())
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
    <strong>¡Atención!</strong> Hay campos que debes completar:
    <ul class="list-disc list-inside mt-2">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


<form  action="{{ url('/estudiantes')}}" method="post" class="max-w-md mx-auto bg-white p-6 rounded shadow-md space-y-4 my-10">
    <h2 class="text-center text-3xl text-sky-500 font-bold mb-10 ">Registro de Estudiantes</h2>
@csrf
@include("estudiante.form", ["metodo"=> "crear"])


    
</form>

<a class="text-[1.5rem] text-gray-50 text-center rounded-2xl hover:bg-sky-950 bg-sky-800 font-bold p-2 block w-[12rem] mx-auto " href="{{ url('estudiantes/')}}">Regresar</a>



