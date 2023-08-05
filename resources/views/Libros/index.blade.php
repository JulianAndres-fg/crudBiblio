@extends('layouts.app')
@section('title','Libros')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('update'))
    <div class="alert alert-secondary">
        {{ session('update') }}
    </div>
@endif
@if (session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
@endif
    <div class="container">
        <br><br>
        <table class="table">
            <thead class="table table-primary text-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Genero</th>
                <th scope="col">Autor</th>
                <th scope="col">Editorial</th>
                <th scope="col">Acciones</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($Libros as $Libro)
              <tr>
                <th scope="row">{{$Libro->id}}</th>
                <td>{{$Libro->nombre}}</td>
                <td>{{$Libro->genero}}</td>
                <td>{{$Libro->autor}}</td>
                <td>{{$Libro->editorial}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update{{$Libro->id}}">
                    Actualizar
                  </button>
                  
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$Libro->id}}">
                    Eliminar
                  </button>
                  
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view{{$Libro->id}}">
                    Ver
                  </button>
                </td>
              </tr>
              @include('libros.info')
              @endforeach
            </tbody>
          </table>
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#create">
            Insertar libro
          </button>
          <!-- Aquí puede ser tu vista index.blade.php o cualquier otra vista donde desees colocar el botón -->

          @include('libros.create')
    </div>
@endsection
    