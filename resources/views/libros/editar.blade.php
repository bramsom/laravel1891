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
        <h1>EDITAR INFORMES</h1>

        <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label>
                <input type="string" name="title" placeholder="titulo del libro">
            </label>
            <label>
                <input type="string" name="ISBN" placeholder="ISBN del libro">
            </label>
            <label>
                <input type="string" name="editoral" placeholder="editorial del libro">
                
            </label>
            <label>
                <input type="string" name="pages" placeholder="paginas del libro">
                
            </label>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>