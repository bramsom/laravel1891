<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO PROVEEDOR</h1>

    <form action="{{route('supplier.store')}}"  method="POST" >
       
        @csrf

        <label>
            Ingrese el nombre del proveedor:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <label>
            Ingrese la fecha de envio: :
            <br>
            <input type="date" name="date">
        </label>
        <br><br>
        <label>
            Ingrese el cuantas cosas va a enviar:
            <br>
            <input type="integer" name="send">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario:</button>
       
   
    </form>

</body>
</html>