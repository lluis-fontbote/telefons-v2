<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_id',
        'comment',
        'informer'
    ];

    public function phones()
    {
        return $this->belongsTo(Phone::class, 'phone_id', 'id');
    }
}
