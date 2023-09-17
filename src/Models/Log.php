<?php

namespace Falcon\Logviewer\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $fillable = [
        'content',
        'channel',
        'level',
        'context',
        'extra',
        'date'
    ];
}
