<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>Crear curso</h1>

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
        Precio
        <br>
        <input type="integer" name="price">
    </label>
    <br>
    <label>
    descripcion:
    <br>
    <input type="text" name="description">
</label>
<br>
<label>
    Cantidad:
    <br>
    <input type="integer" name="amount">
</label>
<br>
<label>
    Fecha de envio:
    <br>
    <input type="date" name="date">
</label>
<br>
<br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>