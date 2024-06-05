<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO CLIENTE</h1>

    <form action="{{route('custom.store')}}"  method="POST" >
       
        @csrf

        <label>
            Ingrese el nombre del cliente:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <label>
            Ingrese el apellido del cliente: :
            <br>
            <input type="text" name="last_name">
        </label>
        <br><br>
        <label>
            Ingrese la cantidad de compras: :
            <br>
            <input type="text" name="buys">
        </label>
        <br><br><br>

        <button type="submit">Enviar Formulario:</button>
       
   
    </form>

</body>
</html>