<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use Illuminate\Http\Request;
use App\Exports\DepotsExport;
use Maatwebsite\Excel\Facades\Excel;

class DepotController extends Controller
{
    public function collection()
    {
        return Depot::all();
    }
    public function depotExport() 
    {

        return Excel::download(new DepotsExport, 'depots.xlsx');
    } 
}
