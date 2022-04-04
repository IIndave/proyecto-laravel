<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TipoCliente;


class ApiTipoClienteController extends Controller
{

    public function buscar(Request $request)
    {
        $codigo = $request->input('codigo', '');

        return TipoCliente::where(['codigo'=>$codigo])->first();
    }
}