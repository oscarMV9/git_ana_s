<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style_Index_I.css') }}">
    <title>Inventario</title>
</head>
<body>
    <div class="barra_navegacion">
		<nav class="nav">
			<div class="logo">
				<p><img src="../imagenes/logo.jpg" class="imagen_logo"></p>
			</div>
			<div class="navegacion_menu">
				<ul>
					<li><a href="{{ url('#') }}" class="link" active>CERRAR SESION</a></li>
				</ul>
			</div>
		</nav>
	</div>
    <div class="crear_produc">
        <a href="{{url("inventario/create")}}">nuevo producto</a>
    </div>
    <table class="tabla">
        <thead>
            <tr>
                <th class="text">ID</th>
                <th class="text">Nombre</th>
                <th class="text">Descripción</th>
                <th class="text">Cantidades</th>
                <th class="text">Talla</th>
                <th class="text">Color</th>
                <th class="text">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventarios as $Inventario)
            <tr>
                <td>{{$Inventario->id}}</td>
                <td>{{ $Inventario->nombre}}</td>
                <td>{{ $Inventario->descripcion}}</td>
                <td>{{ $Inventario->cantidades}}</td>
                <td>{{ $Inventario->talla}}</td>
                <td>{{ $Inventario->color}}</td>
                <td>{{ $Inventario->precio}}</td>
                <td> <a href="{{ route('inventario.edit', $Inventario->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('inventario.destroy', $Inventario->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>