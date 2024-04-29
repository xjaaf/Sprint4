<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Equipo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8ebab;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 30px;
            color: #374151;
            text-transform: uppercase;
            margin: 0;
        }

        .play-text {
            font-size: 28px;
            text-align: center;
            color: #374151;
        }

        .btn-submit {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
            display: block;
            margin: 20px auto;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-between items-center px-6 py-3 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <div class="container">
            <div class="header">
                <h1 class="text-xs text-gray-700 uppercase">Equipos</h1>
            </div>
        </div>
        <div class="flex items-center">
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded mr-2 typewriter" href="{{ route('games.index') }}" style="font-family: 'Roboto', sans-serif;">Juegos</a>
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded typewriter btn-home" href="{{ route('home') }}" style="font-family: 'Roboto', sans-serif;">Inicio</a>
        </div>
    </div>
</div>

<h1 class="play-text">Editando Equipo</h1>

<form method="POST" action="{{ route('teams.update', ['team' => $modelTeams->id ?? '']) }}" class="max-w-sm mx-auto">

    @csrf
    @method('PUT')
    <input type="hidden" name="team_id" value="{{ $modelTeams->id }}">
    <div class="mb-5">
        <label for="equipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Equipo</label>
        <input type="text" name="equipo" id="equipo" value="{{ old('equipo', $modelTeams->equipo) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class="mb-5">
        <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad" value="{{ old('ciudad', $modelTeams->ciudad) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class="mb-5">
        <label for="puntos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puntos</label>
        <input type="text" name="puntos" id="puntos" value="{{ old('puntos', $modelTeams->puntos) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <button type="submit" class="btn-submit">Enviar</button>
</form>

</body>
</html>
