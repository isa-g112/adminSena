@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Computer</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nombre de la Computer</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $computer->name) }}" placeholder="">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Computer
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
