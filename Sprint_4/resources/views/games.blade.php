<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

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
            overflow: hidden; /* Hide the text overflow */
            border-right: .15em solid orange; /* Create a typewriter effect */
            white-space: nowrap; /* Keep the text in one line */
            animation: typing 1.5s steps(30, end), blink-caret .75s step-end infinite;
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: orange }
        }

        /* Cambiar tamaño de la fuente para "Let's play" */
        .play-text {
            font-size: 28px; /* Cambiar el tamaño de la fuente según sea necesario */
            text-align: center; /* Alinear el texto al centro */
            color: #374151; /* Cambiar el color del texto si es necesario */
        }

        /* Estilo para el botón de nuevo equipo */
        .btn-new-team {
            background-color: #4CAF50; /* Color de fondo verde */
            border: none; /* Sin borde */
            color: white; /* Color de texto blanco */
            padding: 5px 10px; /* Espaciado interno */
            text-align: center; /* Alinear texto al centro */
            text-decoration: none; /* Sin decoración de texto */
            font-size: 16px; /* Tamaño de fuente */
            border-radius: 6px; /* Añadir borde redondeado */
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
            margin-right: 10px; /* Margen derecho para separarlo de otros elementos */
        }

        .btn-new-team:hover {
            background-color: #45a049; /* Cambiar color de fondo al pasar el mouse */
        }

        /* Estilo para centrar verticalmente el texto en el botón de Rankings */
        .btn-rankings {
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        /* Mover todo a la izquierda */
        .container {
            padding: 0 10px;
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
            <a class="btn-new-team" href="new_team">
                <span style="display: flex; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 1a1 1 0 0 1 1 1v7h7a1 1 0 0 1 0 2h-7v7a1 1 0 1 1-2 0v-7H3a1 1 0 1 1 0-2h7V2a1 1 0 0 1 1-1z" clip-rule="evenodd" />
                    </svg>
                    Game
                </span>
            </a> <!-- Botón para crear un nuevo juego -->
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded mr-2 typewriter" href="teams" style="font-family: 'figtree', sans-serif;">Teams</a>
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded typewriter btn-rankings" href="rankings" style="font-family: 'figtree', sans-serif;">Rankings</a>
        </div>
    </div>
</div>
<div class="flex justify-center items-center" style="height: calc(100vh - 200px);">
    <h1 class="play-text">Let's play</h1>
</div>
</body>
</html>
