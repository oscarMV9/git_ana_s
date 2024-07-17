<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formInv.css') }}">
    <title>Editar Inventario</title>
</head>
<body>
    <div class="fondo">
            <form action="{{ route('inventario.update', $inventario->id) }}" method="post">
        @csrf
        @method('PUT')
        <h1>Editar Inventario</h1>

        <input type="text" placeholder="Nombre" id="nombre" name="nombre" value="{{ $inventario->nombre }}" required>

        <input type="text" placeholder="Descripcion" id="descripcion" name="descripcion" value="{{ $inventario->descripcion }}" required>

        <input type="number" placeholder="Cantidades" id="cantidades" name="cantidades" value="{{ $inventario->cantidades }}" required>

        <input type="text" placeholder="Talla" id="talla" name="talla" value="{{ $inventario->talla }}" required>

        <input type="text" id="color" placeholder="Color" name="color" value="{{ $inventario->color }}" required>

        <input type="number" step="0.01" placeholder="Precio" id="precio" name="precio" value="{{ $inventario->precio }}" required>

        <input type="submit" value="Actualizar datos">
    </form>
    <a href="{{ route('inventario.index') }}">Volver</a>
    </div>
</body>
</html>
