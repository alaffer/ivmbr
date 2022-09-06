<?php

namespace App\Imports;

use App\Models\BankData;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class BankDataImport implements ToModel, WithCustomCsvSettings //, WithHeadingRow // ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dd($row);

        return new BankData([
            
            // 'Buchungsdatum' => $row['Buchungsdatum'],
            // 'Valutadatum' => $row['Valutadatum'],
            // 'Buchungstext' => $row['Buchungstext'],
            // 'Interne_Notiz' => $row['Interne_Notiz'],
            // 'Währung' => $row['Währung'],
            // 'Betrag' => $row['Betrag'],
            // 'Belegdaten' => $row['Belegdaten'],
            // 'Belegnummer' => $row['Belegnummer'],
            // 'Auftraggebername' => $row['Auftraggebername'],
            // 'Auftraggeberkonto' => $row['Auftraggeberkonto'],
            // 'Auftraggeber' => $row['Auftraggeber'],
            // 'ImportedInBooking' => false

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
            'ImportedInBooking' => false

        ]);
    }
    public function getCsvSettings(): array
    {
        return [
            'input_encoding' => 'ISO-8859-1',
            'delimiter' => ';',
            'enclosure' => '"',
        ];
    }
    // public function headingRow(): int
    // {
    //     return 1;
    // }
    // public function onRow(Row $row)
    // {

    //     $rowIndex = $row->getIndex();
    //     $row      = $row->toArray();

    //     dd($row);


    //     // $bd = BankData::firstOrCreate([
    //     //     'Buchungsdatum' => $row[1],
    //     //     'Valutadatum' => $row[2],
    //     //     'Buchungstext' => $row[3],
    //     //     'Interne_Notiz' => $row[4],
    //     //     'Währung' => $row[5],
    //     //     'Betrag' => $row[6],
    //     //     'Belegdaten' => $row[7],
    //     //     'Belegnummer' => $row[8],
    //     //     'Auftraggebername' => $row[9],
    //     //     'Auftraggeberkonto' => $row[10],
    //     //     'Auftraggeber' => $row[11],
    //     // ]);
    
    // }
}
