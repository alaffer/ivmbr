<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class BookingsExport implements FromCollection, WithHeadings, WithMapping, WithEvents, ShouldAutoSize, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Booking::with(['depot','category'])
        ->withTrashed()
        // ->where('paydate','>','2021-01-01')
        ->orderBy('paydate','DESC')
        ->orderBy('id','ASC')
        ->get();
        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'Depot',
            'Kategorie',
            'Datum',
            'Zweck',
            'Förderjahr',
            'Eingang',
            'Ausgang',
            'Person',
            'Anmerkung',
            'Gelöscht',
            'Erstellt',
            'Geändert',
        ];
    }    
    public function map($booking): array
    {
        return [
            $booking->id,
            $booking->depot ? $booking->depot->name : null,
            $booking->category ? $booking->category->name : null,
            date('Y-m-d', strtotime($booking->paydate)),
            $booking->purpose,
            $booking->support_year,
            $booking->payin,
            $booking->payout,
            $booking->person,
            $booking->remarks,
            $booking->deleted_at ? $booking->deleted_at->toDateString() : null,
            $booking->created_at ? $booking->created_at->toDateString() : null,
            $booking->updated_at ? $booking->updated_at->toDateString() : null,
        ];
    }
    public function registerEvents() : array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $sheet = $event->getSheet();
                $cellRange = 'A1:M1';
                $sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
                $sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                
                $styleArray = [
                    'borders' => [
                        'outline' => [
                            'borderStyle' => Border::BORDER_THICK,
                            'color' => ['argb' => 'FF0000FF'],
                        ]
                    ]
                ];
                $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);

                // $cellRange = 'B:B';
                // $sheet->getStyle($cellRange)->getNumberFormat()->setFormatCode('000-00000000');
            },
        ];
    }
    public function columnFormats(): array
    {
        return [
            'B' => NumberFormat::FORMAT_TEXT,
            'D' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'G' => NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE,
            'H' => NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE,
            'K' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'L' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'M' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
