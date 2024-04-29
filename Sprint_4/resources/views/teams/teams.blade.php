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
            <a class="btn-new-team" href="{{route('teams.create')}}">
                <span style="display: flex; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 1a1 1 0 0 1 1 1v7h7a1 1 0 0 1 0 2h-7v7a1 1 0 1 1-2 0v-7H3a1 1 0 1 1 0-2h7V2a1 1 0 0 1 1-1z" clip-rule="evenodd" />
                    </svg>
                    Team
                </span>
            </a> <!-- Botón para crear un nuevo equipo -->
            <a class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded mr-2 typewriter" href="{{route('games.index')}}"  style="font-family: 'figtree', sans-serif;">Games</a>
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
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Ciudad
                </th>
                <th scope="col" class="px-6 py-3">
                    Puntos
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $team->equipo}}
                </th>
                <td class="px-6 py-4">
                    {{ $team->ciudad}}
                </td>
                <td class="px-6 py-4">
                    {{ $team->puntos}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('teams.edit', $team->id)}}">Edit</a>
                    <!-- Botón de eliminación -->
                    <button onclick="openConfirmationModal({{ $team->id }})" class="text-red-500 ml-2">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal de confirmación -->
<div id="confirmationModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- Aquí puedes personalizar el estilo del modal según tus preferencias -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Confirmar eliminación</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">¿Estás seguro de que quieres eliminar este equipo?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <form id="deleteForm" method="POST" action="{{ route('teams.destroy', ['team' => 'TEAM_ID']) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Delete
                    </button>
                </form>
                <button onclick="closeConfirmationModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openConfirmationModal(teamId) {
        document.getElementById('deleteForm').action = '/teams/' + teamId;
        document.getElementById('confirmationModal').classList.remove('hidden');
    }

    function closeConfirmationModal() {
        document.getElementById('confirmationModal').classList.add('hidden');
    }
</script>

</body>

</html>
