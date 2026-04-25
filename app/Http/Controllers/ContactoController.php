<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'numero' => 'required|string|max:20',
        ]);

        Contacto::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'numero' => $request->numero,
        ]);

        return back()->with('success', '¡Mensaje enviado correctamente!');
    }
}