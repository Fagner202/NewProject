<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // dd('ola');
        $eventos = Evento::getEventosPorUsuario(auth()->user()->id);
        // dd($eventos);
        // return view('eventos.index');
        return view('dashboard');
    }
}
