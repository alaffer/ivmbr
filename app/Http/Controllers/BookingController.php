<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\BookingsExport;
use App\Exports\BookingsExportView;
use App\Exports\BookingsViewExport;
use Maatwebsite\Excel\Facades\Excel;

class BookingController extends Controller
{
    public function bookingExport()
    {
        return Excel::download(new BookingsExport, 'bookings.xlsx');
    }

    public function bookingViewExport()
    {
        return Excel::download(new BookingsViewExport, 'bookings.xlsx');
    }

}
