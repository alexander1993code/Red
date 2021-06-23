@extends('layouts.web')

@section('content')

    <div class="text-center">
        <h1 class="text-3xl text-gray-700 uppercase mb-2">Ultimos Cursos</h1>
        <h2 class="text-xl text-gray-600">Formate como programador</h2>
        <h3 class="text-lg text-gray-600">70% de los graduados mejoran sus ingresos</h3>
    </div>

    <livewire:course-list>

@endsection()