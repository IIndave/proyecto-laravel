<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LineasVentasController extends Controller
{
    public function list(){
        $results = DB::select('SELECT * FROM [laravel].[dbo].[LineasVentas]');
        return $results;
    }
}
