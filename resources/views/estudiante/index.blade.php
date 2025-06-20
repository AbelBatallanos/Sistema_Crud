@extends('layouts.app')

@section('title', 'Listado de Estudiantes Faraon')

@section('content')

<h2 class="text-center text-3xl text-sky-600 font-black my-10">Listado De Estudiantes</h2>

<a class="bg-sky-700 block w-[12rem] rounded-3xl hover:bg-sky-100 hover:text-sky-700 hover:font-bold text-center mx-auto text-white p-4 my-10" href="{{ url('estudiantes/create')}}">Registrar Nuevo Estudiante</a>

<table class=" min-w-4/5 mx-auto border border-gray-300 text-sm text-left text-gray-70 space-y-5" >
    <thead class="bg-gray-200">
        <tr>
            <th class="px-4 py-2 text-sky-700 text-[1.2em] uppercase">#</th>
            <th class="px-4 py-2 text-sky-700 text-[1.2em] uppercase">Nombre</th>
            <th class="px-4 py-2 text-sky-700 text-[1.2em] uppercase">ApellidoPaterno</th>
            <th class="px-4 py-2 text-sky-700 text-[1.2em] uppercase">ApellidoMaterno</th>
            <th class="px-4 py-2 text-sky-700 text-[1.2em] uppercase">Materia</th>
            <th class="px-4 py-2 text-sky-700 text-[1.2em] uppercase">Carrera</th>
            <th class="px-4 py-2 text-sky-700 text-[1.2em] uppercase">Acciones</th>
        </tr>
    </thead>
    <tbody class="bg-indigo-50 ">
       
        @foreach($estudiantes as $estudiante)
            <tr class="">
                <td scope="row" class="px-4 py-4 font-bold">{{ $estudiante->id}}</td>
                <td class="px-4 py-4 font-bold">{{ $estudiante->Nombre}}</td>
                <td class="px-4 py-4 font-bold">{{ $estudiante->ApellidoPaterno}}</td>
                <td class="px-4 py-4 font-bold">{{ $estudiante->ApellidoMaterno}}</td>
                <td class="px-4 py-4 font-bold">{{ $estudiante->Materia}}</td>
                <td class="px-4 py-4 font-bold">{{ $estudiante->Carrera}}</td>
                <td><section class="flex gap-4">
                    <a class="uppercase inline-block bg-blue-300 text-white font-medium hover:bg-blue-500 p-2 rounded-xl" href="{{ url('/estudiantes/'.$estudiante->id.'/edit') }}">editar</a>
                    <form action="{{ url('/estudiantes/'.$estudiante->id) }}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input class="uppercase inline-block bg-red-300 text-white font-medium hover:bg-red-500  p-2 rounded-xl" type="submit" value="Eliminar" onclick="return confirm('¿Quieres Eliminarlo?')">
                    </form>
                </section></td>
            </tr>
        @endforeach
    </tbody>
</table>
