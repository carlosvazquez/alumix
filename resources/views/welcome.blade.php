<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Students App</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <!-- Barra de navegación -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="/" class="text-xl font-bold text-gray-800">
                            Students App
                        </a>
                    </div>

                    <div class="flex items-center space-x-4">
                        @auth
                            <span class="text-gray-600">Bienvenido, {{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-gray-600 hover:text-gray-900">
                                    Cerrar sesión
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Iniciar sesión
                            </a>
                            <a href="{{ route('register') }}"
                               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Registrarse
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-gray-100">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <h1 class="text-4xl font-bold text-gray-900">
                        Bienvenido a Students App
                    </h1>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Gestión de Estudiantes</h2>
                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Sistema completo para la gestión de estudiantes, calificaciones y seguimiento académico.
                                </p>
                            </div>
                        </div>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-indigo-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Reportes y Estadísticas</h2>
                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Genera reportes detallados y visualiza estadísticas del rendimiento académico.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
