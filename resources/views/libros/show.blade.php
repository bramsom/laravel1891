<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de logros</title>
    </head>
<body>
    <div class="container">
        <h1>DETALLES DE LIBROS</h1>
        <div>
            <p>ID: {{$book->id}}</p>
            <p>TITULO DEL LIBRO {{$book->title}}</p>
            <p>ISBN DEL LIBRO: {{$book->ISBN}}</p>
            <p>EDITORIAL DEL LIBRO: {{$book->editorial}}</p>
            <p>PAGINAS DEL LIBRO: {{$book->pages}}</p>
        </div>
    </div>
</body>
</html>