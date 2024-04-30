<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Game</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-color: #f8ebab; /* Color de fondo amarillo */
            font-family: 'figtree', sans-serif; /* Cambiar la fuente */
            margin: 0; /* Eliminar márgenes predeterminados */
            padding: 0; /* Eliminar relleno predeterminado */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            padding: 20px 0;
            display: flex; /* Hacer que los elementos dentro del header sean flexibles */
            justify-content: space-between; /* Distribuir los elementos de forma equitativa en el header */
            align-items: center; /* Alinear los elementos verticalmente al centro */
        }

        .header h1 {
            font-size: 30px;
            color: #374151;
            text-transform: uppercase;
            margin: 0; /* Eliminar el margen superior e inferior */
        }

        /* Cambiar tamaño de la fuente para "Let's play" */
        .play-text {
            font-size: 28px; /* Cambiar el tamaño de la fuente según sea necesario */
            text-align: center; /* Alinear el texto al centro */
            color: #374151; /* Cambiar el color del texto si es necesario */
        }

        /* Estilo para el formulario */
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilo para el botón de submit */
        .submit-btn {
            background-color: #4CAF50; /* Color de fondo */
            border: none; /* Sin borde */
            color: white; /* Color del texto */
            padding: 10px 20px; /* Espaciado interno */
            text-align: center; /* Alinear al centro */
            text-decoration: none; /* Sin decoración de texto */
            font-size: 16px; /* Tamaño de fuente */
            border-radius: 6px; /* Borde redondeado */
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
            margin-top: 20px; /* Margen superior */
            cursor: pointer; /* Cambiar cursor al pasar el ratón */
        }

        .submit-btn:hover {
            background-color: #45a049; /* Cambiar color de fondo al pasar el mouse */
        }

        /* Estilo para el botón de cancelar */
        .cancel-btn {
            background-color: #ff0000; /* Color de fondo */
            border: none; /* Sin borde */
            color: white; /* Color del texto */
            padding: 10px 20px; /* Espaciado interno */
            text-align: center; /* Alinear al centro */
            text-decoration: none; /* Sin decoración de texto */
            font-size: 16px; /* Tamaño de fuente */
            border-radius: 6px; /* Borde redondeado */
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
            margin-top: 20px; /* Margen superior */
            cursor: pointer; /* Cambiar cursor al pasar el ratón */
            margin-right: 10px; /* Margen derecho */
        }

        .cancel-btn:hover {
            background-color: #cc0000; /* Cambiar color de fondo al pasar el mouse */
        }
    </style>
</head>
<body class="antialiased">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-between items-center px-6 py-3 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <div class="container">
            <div class="header">
                <h1 class="text-xs text-gray-700 uppercase">Create Game</h1>
            </div>
        </div>
        <div class="flex items-center">
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded mr-2 typewriter" href="{{ route('games.index') }}"  style="font-family: 'figtree', sans-serif;">Games</a>
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded typewriter btn-home" href="{{ route('home') }}" style="font-family: 'figtree', sans-serif;">Home</a>
        </div>
    </div>
</div>

<h1 class="play-text">Let's play</h1>

<div class="form-container">
    <form method="POST" action="{{ route('games.store') }}">
        @csrf
        <div class="mb-4">
            <label for="team_home_id" class="block text-gray-700 text-sm font-bold mb-2">Home Team:</label>
            <select name="team_home_id" id="team_home_id" class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->equipo }}</option>
                @endforeach
            </select>
            @error('team_home_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="team_visitor_id" class="block text-gray-700 text-sm font-bold mb-2">Visitor Team:</label>
            <select name="team_visitor_id" id="team_visitor_id" class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->equipo }}</option>
                @endforeach
            </select>
            @error('team_visitor_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="date_match" class="block text-gray-700 text-sm font-bold mb-2">Match Date and Time:</label>
            <input type="datetime-local" name="date_match" id="date_match" class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500">
            @error('date_match')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="flex justify-between">
            <button type="submit" class="submit-btn">Create Game</button>
            <a href="{{ route('games.index') }}" class="cancel-btn">Cancel</a>
        </div>
    </form>
</div>

</body>
</html>
