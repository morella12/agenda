<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function filter(Request $request, Contato $contato)
    {
        if ($request->has('nome')) {
            return $user->where('nome', $request->input('nome'))->get();
        }
    
        if ($request->has('telefone')) {
            return $user->where('telefone', $request->input('telefone'))
                ->get();
        }
        return Contato::all();
    }
}
