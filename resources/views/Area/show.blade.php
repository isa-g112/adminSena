@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Área</h2>

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
                    <td>{{ $Area['id'] }}</td>
                    <td>{{ $Area['name'] }}</td>


                </tr>
                 <a href="{{ route('Area.index', $Area['id']) }}" class="btn btn-info btn-sm">regresa </a> 
            </tbody>
        </table>
    </div>
</div>


@endsection
