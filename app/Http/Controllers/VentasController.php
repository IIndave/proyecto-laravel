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
        $query="SELECT * FROM [laravel].[dbo].[Ventas] where fecha LIKE '$month%'";
        
        $results = DB::select($query);
        return $results;
    }

    public function totalByMonth(Request $request){
        $month = $request->query('month');
        $query2="SELECT fecha,SUM(CAST (importe AS DECIMAL)) AS importe_total FROM [laravel].[dbo].[Ventas] where [fecha] LIKE '$month%' group by fecha ORDER by fecha";
        
        $results = DB::select($query2);
        return $results;
    }
}
