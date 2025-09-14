<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class glasswares extends Model
{
       protected $fillable = [
        'name',
        'capacity',
        'type',
        'batch_number',
        'quantity',
        'notes',
    ];
}
