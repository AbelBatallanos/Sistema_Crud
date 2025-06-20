




<input class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" type="text" name="Nombre" value="{{old('Nombre', $estudiante->Nombre ?? '')  }}" placeholder="Nombre del Estudiante">
<input class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"  type="text" name="ApellidoPaterno" value="{{ old('ApellidoPaterno', $estudiante->ApellidoPaterno ?? '') }}" placeholder="Ap.Paterno del Estudiante">
<input class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"  type="text" name="ApellidoMaterno" value="{{ old('ApellidoMaterno', $estudiante->ApellidoMaterno ?? '') }}" placeholder="Ap.Materno del Estudiante">
<input class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"  type="text" name="Materia" value="{{ isset($estudiante->Materia)?$estudiante->Materia: old('Materia') }}" placeholder="Materia del Estudiante">
<input class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"  type="text" name="Carrera" value="{{ isset($estudiante->Carrera)?$estudiante->Carrera: old('Carrera') }}" placeholder="Carrera del Estudiante">

<input class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition" type="submit" value="{{$metodo == 'crear'? 'Registrar' : 'Guardar Cambios'; }} "> 


