<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'number', 'street',
        'city', 'mail'
    ];

    protected $table = 'people';

    use HasFactory;
}
