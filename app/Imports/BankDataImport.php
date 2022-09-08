<?php

namespace App\Imports;

use App\Models\BankData;
use Maatwebsite\Excel\Row;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class BankDataImport implements ToModel, WithCustomCsvSettings, WithHeadingRow // ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        $bdqry = DB::table('bank_data')
            ->where('buchungsdatum', '=', $this->getFromDateAttribute($row['buchungsdatum']))
            ->where('buchungstext', '=', $row['buchungstext'])
            ->where('betrag', '=', (float)$row['betrag'])
            ->where('belegdaten', '=', $this->ReplaceSpaces($row['belegdaten']))
            ->get();

        if($bdqry->count()==0)
        {
            $bd = new BankData([
                
                'buchungsdatum' => $this->getFromDateAttribute($row['buchungsdatum']),
                'valutadatum' => $this->getFromDateAttribute($row['valutadatum']),
                'buchungstext' => $row['buchungstext'],
                'interne_notiz' => $row['interne_notiz'],
                'währung' => $row['wahrung'],
                'betrag' => (float)$row['betrag'],
                'belegdaten' => $this->ReplaceSpaces($row['belegdaten']),
                'belegnummer' => (string) str($row['belegnummer']),
                'auftraggebername' => $row['auftraggebername'],
                'auftraggeberkonto' => $row['auftraggeberkonto'],
                'auftraggeber_blz' => $row['auftraggeber_blz'],
                'empfängername' => $row['empfangername'],
                'empfängerkonto' => $row['empfangerkonto'],
                'empfänger_blz' => $row['empfanger_blz'],
                'zahlungsgrund' => $row['zahlungsgrund'],
                'zahlungsreferenz' => $row['zahlungsreferenz'],
            ]);
            //dd($row, $bd);
            return $bd;
        }
        else {
            //dd($bdqry);
            return null;
        }
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
    public function ReplaceSpaces($input = null)
    {
        $output = preg_replace('!\s+!', ' ', $input);
        return $output;
    }
}
