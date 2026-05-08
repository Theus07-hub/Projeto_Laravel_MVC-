<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passeio;

class PasseioController extends Controller
{
    public function index()
    {
        return view('passeio');
    }

    public function salvar(Request $request)
    {
        Passeio::create([
            'nome_pet' => $request->nome_pet,
            'responsavel' => $request->responsavel,
            'data' => $request->data,
            'horario' => $request->horario
        ]);

        return redirect('/passeio');
    }
}