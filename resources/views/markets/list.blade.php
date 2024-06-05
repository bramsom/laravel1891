<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <h1><u>PRODUTOS LISTADOS</u></h1>
<table>
     @foreach ($markets as $Article) 
    <tr>
        <td>{{$Article->id}} </td>
        <td>{{$Article->name}}</td>
        <td>{{$Article->price}}</td>
        <td>{{$Article->descripcion}} </td>
        <td>{{$Article->cantidad}}</td>
        <td>{{$Article->date_exp}}</td>
        <td> <a href="{{route('markets.show',$Article->id)}}">Mostrar</a></td>
        <td> 
            <form action="{{route('markets.destroy',$Article->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar Producto</button>
            </form>  
        </td>
    </tr>
     @endforeach
</table>
    </center>
</body>
</html>