<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>

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
            display: flex; /* Hacer que los elementos dentro del botón sean flexibles */
            align-items: center; /* Alinear los elementos verticalmente al centro */
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
                <h1 class="text-xs text-gray-700 uppercase">Teams</h1>
            </div>
        </div>
        <div class="flex items-center">
            <!-- Botón para crear un nuevo equipo -->
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded mr-2 typewriter" href="{{route('games.index')}}"  style="font-family: 'figtree', sans-serif;">Games</a>
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded typewriter btn-home" href="{{route('home')}}" style="font-family: 'figtree', sans-serif;">Home</a>
        </div>
    </div>
</div>

    <h1 class="play-text">Let's Create</h1>

    

<form method="POST" action="{{route('teams.store')}}" class="max-w-sm mx-auto">
    @csrf
    <div class="mb-5">
      <label for="equipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Equipo</label>
      <input type="text" name="equipo" id="equipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class="mb-5">
        <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
      </div>
      <div class="mb-5">
        <label for="puntos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puntos</label>
        <input type="text" name="puntos" id="puntos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
      </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  

</body>
</html>
