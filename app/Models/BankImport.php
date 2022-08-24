<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankImport extends Model
{
    use HasFactory;

    protected $table = 'bank_import';
    //Buchungsdatum;Valutadatum;Buchungstext ;Interne Notiz;Währung;Betrag;Belegdaten;Belegnummer;Auftraggebername;Auftraggeberkonto;Auftraggeber

    public $fillable = ['Buchungsdatum', 'Valutadatum', 'Buchungstext', 'Interne_Notiz', 'Währung', 'Betrag', 'Belegdaten', 'Belegnummer', 'Auftraggebername', 'Auftraggeberkonto', 'Auftraggeber', 'ImportedInBooking'];

}
