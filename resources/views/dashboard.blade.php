@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-semibold mb-4">Dashboard</h2>

                <!-- Tarjetas de estadísticas -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-indigo-100 rounded-lg p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-indigo-600 bg-opacity-10">
                                <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-700">Total Estudiantes</h3>
                                <p class="text-3xl font-bold text-indigo-600">{{ $stats['total_students'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-green-100 rounded-lg p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-600 bg-opacity-10">
                                <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-700">Cursos Activos</h3>
                                <p class="text-3xl font-bold text-green-600">{{ $stats['active_courses'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-100 rounded-lg p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-600 bg-opacity-10">
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-700">Promedio General</h3>
                                <p class="text-3xl font-bold text-blue-600">{{ number_format($stats['average_grade'], 1) }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección de actividades recientes -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-700">Actividades Recientes</h3>
                    </div>
                    <div class="p-6">
                        @if(count($recent_activities) > 0)
                            <ul class="divide-y divide-gray-200">
                                @foreach($recent_activities as $activity)
                                    <li class="py-4">
                                        <!-- Aquí irá el contenido de cada actividad -->
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <div class="text-center text-gray-500 py-4">
                                No hay actividades recientes para mostrar.
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Sección de próximas tareas -->
                <div class="mt-8 bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-700">Próximas Tareas</h3>
                    </div>
                    <div class="p-6">
                        @if(count($upcoming_tasks) > 0)
                            <ul class="divide-y divide-gray-200">
                                @foreach($upcoming_tasks as $task)
                                    <li class="py-4">
                                        <!-- Aquí irá el contenido de cada tarea -->
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <div class="text-center text-gray-500 py-4">
                                No hay tareas pendientes.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
