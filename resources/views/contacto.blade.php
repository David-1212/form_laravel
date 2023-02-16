<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contacto</h1>

    <form action="contacto" method="POST">
        @csrf
        <label for='nombre'>Nombre</label>
        <input type="text" name="nombre" id="nombre"/>
        
 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @error('nombre')
            <h4>{{ $message}}</h4>
        @enderror
        <br/><br/>
        <label for='codigo'>Codigo</label>
        <input type="codigo" name="codigo" id="codigo"/>
        <br/><br/>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="submit" value="Enviar"></input>
    </form>
</body>
</html>