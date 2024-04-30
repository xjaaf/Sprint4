<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Games</title>

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

        @keyframes typing {
            from { width: 0 }
            to { width: auto }
        }

        .typewriter {
            overflow: hidden; /* Ocultar el desbordamiento de texto */
            border-right: .15em solid orange; /* Crear un efecto de máquina de escribir */
            white-space: nowrap; /* Mantener el texto en una línea */
            animation: typing 1.5s steps(30, end), blink-caret .75s step-end infinite;
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: orange }
        }

        /* Estilo para "Let's play" */
        .play-text {
            font-size: 28px; /* Tamaño de fuente */
            text-align: center; /* Alinear al centro */
            color: #374151; /* Color del texto */
        }

        /* Estilo para el botón de nuevo equipo */
        .btn-new-team {
            background-color: #4CAF50; /* Color de fondo */
            border: none; /* Sin borde */
            color: white; /* Color del texto */
            padding: 5px 10px; /* Espaciado interno */
            text-align: center; /* Alinear al centro */
            text-decoration: none; /* Sin decoración de texto */
            font-size: 16px; /* Tamaño de fuente */
            border-radius: 6px; /* Borde redondeado */
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
            margin-right: 10px; /* Margen derecho */
            display: flex; /* Hacer que los elementos dentro del botón sean flexibles */
            align-items: center; /* Alinear verticalmente al centro */
        }

        .btn-new-team:hover {
            background-color: #45a049; /* Cambiar color de fondo al pasar el mouse */
        }

        /* Estilos para la tabla */
        .container {
            padding: 0 10px;
        }

        /* Estilos para hacer "Welcome to the league" responsive */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 24px;
            }
        }
        @media (max-width: 576px) {
            .header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body class="antialiased">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-between items-center px-6 py-3 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <div class="container">
            <div class="header">
                <h1 class="text-xs text-gray-700 uppercase">Games</h1>
            </div>
        </div>
        <div class="flex items-center">
            <a class="btn-new-team" href="{{route('games.create')}}">
                <span style="display: flex; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 1a1 1 0 0 1 1 1v7h7a1 1 0 0 1 0 2h-7v7a1 1 0 1 1-2 0v-7H3a1 1 0 1 1 0-2h7V2a1 1 0 0 1 1-1z" clip-rule="evenodd" />
                    </svg>
                    Game
                </span>
            </a> <!-- Botón para crear un nuevo equipo -->
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded mr-2 typewriter" href="{{route('teams.index')}}"  style="font-family: 'figtree', sans-serif;">Teams</a>
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded typewriter btn-home" href="{{route('home')}}" style="font-family: 'figtree', sans-serif;">Home</a>
        </div>
    </div>
</div>
<h1 class="play-text">Let's play</h1>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Home
                </th>
                <th scope="col" class="px-6 py-3">
                    Visitor
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $game->homeTeam->equipo }}
                </th>
                <td class="px-6 py-4">
                    {{ $game->visitorTeam->equipo }}
                </td>
                <td class="px-6 py-4">
                    {{ $game->date_match }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('games.edit', $game->id) }}">Edit</a>
                    <!-- Formulario para eliminar -->
                    <form id="deleteForm{{ $game->id }}" action="{{ route('teams.destroy', $game->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar este equipo?')" class="text-red-500 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal de confirmación omitido por brevedad -->

<script>
    function openConfirmationModal(teamId) {
        document.getElementById('deleteForm' + teamId).submit();
    }
</script>

</body>
</html>
