<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>asociar</h1>

    <form action="{{route('camion.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
     
        <br>
        <h1>Camion:</h1>
        <select name="truck_id">
            @foreach($trucks as $Truck)
                <option value="{{ $Truck->id }}">{{ $Truck->id }} - {{ $Truck->tipo }}</option>
            @endforeach
        </select>
        <br>
        <h1>Camionero:</h1>    
        <select name="trucker_id">
            @foreach($truckers as $Trucker)
                <option value="{{ $Trucker->id }}">{{ $Trucker->id }} - {{ $Trucker->nombre }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">asociar:</button>
        </form>
        
 
</body>
</html>