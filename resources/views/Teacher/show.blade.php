@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Teacher</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $Teacher['id'] }}</td>
                    <td>{{ $Teacher['name'] }}</td>

                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
