<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'country',
        'province'
    ];

    public function reports()
    {
        return $this->hasMany(Report::class, 'phone_id', 'id');
    }
}
