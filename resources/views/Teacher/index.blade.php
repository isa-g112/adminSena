@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Teachers</h1>

        <a href="{{ route('Teacher.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($Teachers as $Teacher)
                    <tr>
                        <td>{{ $Teacher['id'] }}</td>
                        <td>{{ $Teacher['name'] }}</td>

                        <td>
                            <a href="{{ route('Teacher.show', $Teacher['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                        </td>
                        <td><a href="{{ route('Teacher.edit', $Teacher->id) }}"class="btn btn-success btn-sm">Editar</a></td>
                        <td>
                        <form action="{{ route('Teacher.destroy', $Teacher->id) }}" method="POST">
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

