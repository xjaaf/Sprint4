<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Game</title>

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

        /* Estilo para "Let's play" */
        .play-text {
            font-size: 28px; /* Tamaño de fuente */
            text-align: center; /* Alinear al centro */
            color: #374151; /* Color del texto */
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
    </style>
</head>
<body class="antialiased">
    <h1 class="play-text">Let's play</h1>

    <div class="form-container">
        <form method="POST" action="{{ route('games.update', $game->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="team_home_id" class="block text-gray-700 text-sm font-bold mb-2">Home Team:</label>
                <select name="team_home_id" id="team_home_id" class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500">
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}" {{ $game->homeTeam->id == $team->id ? 'selected' : '' }}>{{ $team->equipo }}</option>
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
                        <option value="{{ $team->id }}" {{ $game->visitorTeam->id == $team->id ? 'selected' : '' }}>{{ $team->equipo }}</option>
                    @endforeach
                </select>
                @error('team_visitor_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="date_match" class="block text-gray-700 text-sm font-bold mb-2">Match Date and Time:</label>
                <input type="datetime-local" name="date_match" id="date_match" class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500" value="{{ $game->date_match }}">
                @error('date_match')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-between">
                <button type="submit" class="submit-btn">Update Game</button>
                <a href="{{ route('games.index') }}" class="cancel-btn">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
