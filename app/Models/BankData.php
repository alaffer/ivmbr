<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankData extends Model
{
    use HasFactory;

    protected $table = 'bank_data';
    protected $dateFormat = 'd-m-Y H:i:s';

    //Buchungsdatum;Valutadatum;Buchungstext ;Interne Notiz;Währung;Betrag;Belegdaten;Belegnummer;Auftraggebername;Auftraggeberkonto;Auftraggeber

    public $fillable = ['buchungsdatum', 'valutadatum', 'buchungstext', 'interne_notiz', 'währung', 'betrag', 'belegdaten', 'belegnummer', 'auftraggebername', 'auftraggeberkonto', 'auftraggeber_blz', 'empfängername', 'empfängerkonto', 'empfänger_blz','zahlungsgrund','zahlungsreferenz', 'imported_in_bookings'];

}
