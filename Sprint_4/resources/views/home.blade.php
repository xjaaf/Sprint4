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
            text-align: left; /* Alinear el texto a la izquierda */
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
                <h1 class="text-xs text-gray-700 uppercase">Welcome to the league</h1>
            </div>
        </div>
        <div class="flex items-center">
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded mr-2 typewriter" href="{{route('teams.index')}}" style="font-family: 'figtree', sans-serif;">Teams</a>
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded mr-2 typewriter" href="{{route('games.index')}}" style="font-family: 'figtree', sans-serif;">Games</a>
        
        </div>
    </div>
</div>
<div class="flex justify-center items-center" style="height: calc(100vh - 200px);">
    <h1 class="play-text">Let's play</h1>
</div>
</body>
</html>
