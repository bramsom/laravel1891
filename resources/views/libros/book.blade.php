<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Informes</h1>

        <form action="{{route ('book.store')}} " method="post" enctype="multipart/form-data">
            @csrf
                <input type="string" name="title" placeholder="nombre del premio">
                <input type="string" name="ISBN" placeholder="descripcion del logro">
                <input type="string" name="editorial" placeholder="tipo de premio"> 
                <input type="string" name="pages" placeholder="tipo de premio"> 
                <button type="submit" class="submit-button">Enviar Formulario</button>
            </form>
        
        <form action="{{ route('achiviement.index') }}">
            <button type="submit" class="view-button">Ver Registros</button>
        </form>
    </div>
</body>
