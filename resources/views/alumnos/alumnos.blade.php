@extends('master')

@section('contenido')
    <h1>listado de lumnos</h1><hr>
    <a href="{{ url('/alumno/registrar') }}" class="btn btn-secondary">Registrar Alumno</a><br><br>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>No. control</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Domicilio</th>
            <th>Telefono</th>
            <th>Opciones Alumnos</th>
        </thead>
        <tbody>
            @foreach ($alumnos as $a)
            <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->n_control }}</td>
                <td>{{ $a->nombre }}</td>
                <td>{{ $a->edad }}</td>
                <td>{{ $a->sexo }}</td>
                <td>{{ $a->fecha_nacimiento }}</td>
                <td>{{ $a->domicilio }}</td>
                <td>{{ $a->telefono }}</td>
                <td>
                    <a href="{{url('/alumno/editar')}}/{{$a->id}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{url('/alumno/eliminar')}}/{{$a->id}}" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{$alumnos->links()}}
    </div>
    @stop