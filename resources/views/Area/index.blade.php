
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Áreas</h1>

        <a href="{{ route('Area.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $Area)
                    <tr>
                        <td>{{ $Area['id'] }}</td>
                        <td>{{ $Area['name'] }}</td>

                        <td>
                            <a href="{{ route('Area.show', $Area['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                        </td>
                        <td><a href="{{ route('Area.edit', $Area['id']) }}" class="btn btn-success btn-sm">Editar</a></td>
                        <td>
                        <form action="{{ route('Area.destroy', $Area['id']) }}" method="POST">
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

