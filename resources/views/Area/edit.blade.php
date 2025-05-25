@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Categoría</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('Area.update', $Area->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nombre de la Área</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $Area->name) }}" placeholder="">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Área
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
