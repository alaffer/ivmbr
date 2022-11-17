<?php

namespace App\Models;

use App\Models\Depot;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['depot_id', 'category_id', 'paydate', 'purpose', 'support_year', 'payin', 'payout', 'person', 'remarks'];

    protected $casts = [
        'active' => 'boolean',
    ];
    //protected $dateFormat = 'd-m-Y H:i:s';

    public function depot()
    {
       return $this->belongsTo(Depot::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
