<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrlLog extends Model
{
    use HasFactory;

    protected $table = 'short_url_logs'; // Set the table name as per your migration

    protected $fillable = [
        'original_url',
        'short_url',
    ];
}
