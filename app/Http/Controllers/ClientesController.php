<?php

namespace App\Http\Controllers;

use App\Models\ClientesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientesController extends Controller
{
    public function store(Request $request)
    {
        $user = ClientesModel::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'celular' => $request->celular,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
}
