<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backend extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'mobile',
        'street',
        'city',
        'state',
        'zip',
        'country',
        'VAT',
    ];
}
