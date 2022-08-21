<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\BookingsExport;
use App\Exports\BookingsExportView;
use App\Exports\BookingsViewExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Collection;

class BookingController extends Controller
{
    public function bookingExport()
    {
        return Excel::download(new BookingsExport, 'bookings.xlsx');
    }
}
