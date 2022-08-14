<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['name', 'maxsupport', 'maxsupportperyear', 'remarks', 'active'];

    protected $casts = [
        'active' => 'boolean',
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
