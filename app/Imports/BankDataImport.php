<?php

namespace App\Imports;

use App\Models\BankData;
use Maatwebsite\Excel\Concerns\ToModel;

class BankDataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BankData([
            //
            'Buchungsdatum' => $row[1],
            'Valutadatum' => $row[2],
            'Buchungstext' => $row[3],
            'Interne_Notiz' => $row[4],
            'Währung' => $row[5],
            'Betrag' => $row[6],
            'Belegdaten' => $row[7],
            'Belegnummer' => $row[8],
            'Auftraggebername' => $row[9],
            'Auftraggeberkonto' => $row[10],
            'Auftraggeber' => $row[11],
        ]);
    }
}
