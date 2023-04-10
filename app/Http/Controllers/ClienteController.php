<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function list(){
        $results = DB::select('SELECT * FROM [laravel].[dbo].[clientes]');
        return $results;
    }
}
