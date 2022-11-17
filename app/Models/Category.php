<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['name', 'maxsupport', 'maxsupportperyear', 'remarks', 'is_employee_support', 'active'];

    protected $casts = [
        'active' => 'boolean',
        'is_employee_support' => 'boolean',
    ];
    //protected $dateFormat = 'd-m-Y H:i:s';

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
