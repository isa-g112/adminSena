<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Formulario Trainingcenter</h1>

    <br>

    <form action="{{route('Trainingcenter.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <label for="title">Name:</label>

            <input type="text" id="title" name="name" >

            <label for="location">Location:</label>

            <input type ="text" id ="location" name="location">
            <br>


        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

    </form>


</body>
</html>
@extends('layouts.app')

@section('content')
<form action="{{route('Trainingcenter.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" id="title" name="name" class="form-control" required>
    </div>


    <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

</form>

@endsection
