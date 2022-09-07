<?php

namespace App\Imports;

use App\Models\BankData;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class BankDataImport implements ToModel, WithCustomCsvSettings, WithHeadingRow // ToModel
{
    static $fpath;

    // function __construct(array $data) {

    //     //dd($data);
    //     //$this->fpath = $path;
    // }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);

        $bd = new BankData([
            
            'buchungsdatum' => $this->getFromDateAttribute($row['buchungsdatum']),
            'valutadatum' => $this->getFromDateAttribute($row['valutadatum']),
            'buchungstext' => $row['buchungstext'],
            'interne_notiz' => $row['interne_notiz'],
            'währung' => $row['wahrung'],
            'betrag' => (float)$row['betrag'],
            'belegdaten' => $row['belegdaten'],
            'belegnummer' => (string) str($row['belegnummer']),
            'auftraggebername' => $row['auftraggebername'],
            'auftraggeberkonto' => $row['auftraggeberkonto'],
            'auftraggeber_blz' => $row['auftraggeber_blz'],
            'empfängername' => $row['empfangername'],
            'empfängerkonto' => $row['empfangerkonto'],
            'empfänger_blz' => $row['empfanger_blz'],
            'zahlungsgrund' => $row['zahlungsgrund'],
            'zahlungsreferenz' => $row['zahlungsreferenz'],
            

            // 'Buchungsdatum' => $this->getFromDateAttribute($row[1]),
            // 'Valutadatum' => $this->getFromDateAttribute($row[2]),
            // 'Buchungstext' => $row[3],
            // 'Interne_Notiz' => $row[4],
            // 'Währung' => $row[5],
            // 'Betrag' => $row[6],
            // 'Belegdaten' => $row[7],
            // 'Belegnummer' => str($row[8]),
            // 'Auftraggebername' => $row[9],
            // 'Auftraggeberkonto' => $row[10],
            // 'Auftraggeber' => $row[11],
            

        ]);

        //dd($row, $bd);

        return $bd;
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
    //     return 1; // wenn höher z.B. erst bei Zeile 3 - return 3;
    // }
    public function getFromDateAttribute($value) {
        $dt = \Carbon\Carbon::parse($value)->format('Y-m-d');
        // $date=date_create($dt);
        // $dtd = date_format($date, 'Y-m-d');
        // dd($value, $dt, $dtd);

        return $dt;
    }
}
