<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromArray;


class BookingsViewExport implements FromArray
{
    protected $bookings;

    public function __construct(array $bookings)
    {
        $this->bookings = $bookings;
    }

    public function array(): array
    {
        return $this->bookings;
    }
}
