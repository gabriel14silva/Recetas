@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.create') }}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
        <svg class="icono" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
        Crear Receta
    </a>
    <a href="{{ route('perfiles.edit', ['perfil' => Auth::user()->id ]) }}" class="btn btn-outline-success mr-2 text-uppercase font-weight-bold">
        <svg class="icono" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
        Editar Perfil
    </a>
    <a href="{{ route('perfiles.show', ['perfil' => Auth::user()->id ]) }}" class="btn btn-outline-info mr-2 text-uppercase font-weight-bold">
        <svg class="icono" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        Ver Perfil
    </a>

@endsection

@section('content')
    <h2 class="text-center mb-5">Administra tus recetas</h2>


    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
            <tr>
                <th scole="col">Título</th>
                <th scole="col">Categoría</th>
                <th scole="col">Acciones</th>
            </tr>
            </thead>

            <tbody>

            @foreach($recetas as $receta)
            <tr>
                <td> {{$receta->titulo}} </td>
                <td> {{$receta->categoria->nombre}} </td>
                <td>

                    <eliminar-receta
                    receta-id={{$receta->id}}
                    ></eliminar-receta>


                    <a href="{{ route('recetas.edit', ['receta' => $receta->id]) }}" class="btn btn-dark  d-block mb-2">Editar</a>
                    <a href="{{ route('recetas.show', ['receta' => $receta->id]) }}" class="btn btn-success  d-block">Ver</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
