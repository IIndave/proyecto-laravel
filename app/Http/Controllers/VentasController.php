<?php

namespace App\Http\Controllers;

use Illuminate\Database\PDO\SqlServerDriver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    public function list(){
        $results = DB::select('SELECT * FROM [laravel].[dbo].[Ventas]');
        return $results;
    }

    public function listByMonth(Request $request){
        
        $month = $request->query('month');
        $results = DB::select("SELECT * FROM [laravel].[dbo].[Ventas] where fecha LIKE '$month%'");

        return $results;
    }
}
