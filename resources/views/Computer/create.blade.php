<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Formulario Computer</h1>

    <br>

    <form action="{{route('Computer.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <label for="title">Number:</label>

            <input type="text" id="title" name="number" >

            <br>

            <label for="brand">Brand:</label>

            <input type="text" id="brand" name="brand" >

            <br>


        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

    </form>




</body>
</html>
