<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/formInv.css') }}">
    <title>CREAR</title>
</head>
<body>
    <div class="fondo">
        <form action={{ route('inventario.store') }} method="post" enctype="multipart/form-data">
        @csrf
            <h1>crear producto</h1>
            <input type="text" name="nombre" placeholder="Nombre">

            <input type="text" name="descripcion" placeholder="Descripcion">

            <input type="integer" class="cantidades" name="cantidades" required placeholder="Cantidades">

            <input type="text" name="talla" placeholder="Talla">

            <input type="text" name="color" placeholder="Color">

            <input type="number" class="precio" name="precio" placeholder="Precio">

            <input type="submit"  value="Guardar Datos" class="boton">
        </form>
            <a href="{{ route('inventario.index') }}">Volver</a>
    </div>
</body>
</html>