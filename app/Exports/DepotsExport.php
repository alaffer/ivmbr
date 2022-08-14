<?php

namespace App\Exports;

use App\Models\Depot;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepotsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Depot::all();
    }
}
