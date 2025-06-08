<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Muestra el dashboard con las estadísticas y datos relevantes
     */
    public function index()
    {
        // Obtener estadísticas básicas
        $stats = [
            'total_students' => User::where('role', 'student')->count(),
            'active_courses' => 0, // TODO: Implementar cuando se cree el modelo Course
            'average_grade' => 0.0, // TODO: Implementar cuando se cree el modelo Grade
        ];

        // Obtener actividades recientes
        $recent_activities = []; // TODO: Implementar cuando se cree el modelo Activity

        // Obtener próximas tareas
        $upcoming_tasks = []; // TODO: Implementar cuando se cree el modelo Task

        return view('dashboard', compact('stats', 'recent_activities', 'upcoming_tasks'));
    }
}
