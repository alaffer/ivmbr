<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];
    protected $dateFormat = 'Y-m-d H:i:s.v';
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
