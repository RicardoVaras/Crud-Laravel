<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
        <p>Agregar</p>
        <div class="card" style="width: 100px;">
            {{Form::open(['route' => 'add'])}}
            <label for="">nombre</label>
            {{ Form::text('nombre') }}
            <label for="">apellido</label>
            {{ Form::text('apellido') }}
            <label for="">direccion</label>
            {{ Form::text('direccion') }}
            <label for="">celular</label>
            {{ Form::number('celular') }}

            {{ Form::submit('Guardar')}}
            {{Form::close()}} 
        </div>
    </div>

        <div class="col-4">
            <p>Editar</p>
            <div class="card" style="width: 100px;">
                @if($cliente != null)
                {{Form::open(['route' => ['editar',$cliente->id] ])}}
                
                <label for="">nombre</label>
                {{ Form::text('nombre',$cliente->nombre) }}
                <label for="">apellido</label>
                {{ Form::text('apellido',$cliente->apellido) }}
                <label for="">direccion</label>
                {{ Form::text('direccion',$cliente->direccion) }}
                <label for="">celular</label>
                {{ Form::number('celular',$cliente->celular) }}
                @endif

                {{ Form::submit('Guardar')}}
                {{Form::close()}} 
            </div>
        </div>

        <div class="col-4">
    
    
        @foreach ($clientes as $item)
        <div class="card" style="width: 100px;">
            <label for="">{{ $item->nombre }}</label>
            <label for="">{{ $item->apellido }}</label>
            <label for="">{{ $item->direccion }}</label>
            <label for="">{{ $item->celular }}</label>
            {{Form::open(['route' => ['update',$item->id]] )}}
            {{ Form::submit('editar')}}
            {{Form::close()}} 
            {{Form::open(['route' => ['delete',$item->id] ]) }}
            {{ Form::submit('eliminar')}}
            {{Form::close()}} 
        </div>
        @endforeach
            </div>
        </div>
        
    </div>

</body>
</html>