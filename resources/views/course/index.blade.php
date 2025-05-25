@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Cursos</h1>

        <a href="{{ route('course.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course['id'] }}</td>
                        <td>{{ $course['name'] }}</td>

                        <td>
                            <a href="{{ route('course.show', $course['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                        </td>
                        <td><a href="{{ route('course.edit', $course->id) }}"class="btn btn-success btn-sm">Editar</a></td>
                        <td>
                        <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger d-flex align-items-center gap-2">
                                <i class="bi bi-trash-fill"></i> Eliminar
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

