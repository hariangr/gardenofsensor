<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSeries extends Model
{
    protected $table = 'timeseries';
    use HasFactory;

    protected $fillable = [
        'field1',
        'field2',
        'field3',
        'field4',
    ];
}
