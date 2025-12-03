<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{
    use HasFactory;

    protected $fillable = [
        'reporter_name',
        'reporter_address',
        'reporter_contact',
        'reporter_age',
        'respondent_name',
        'respondent_address',
        'respondent_contact',
        'respondent_age',
        'complaint',
        'description',
        'date',
        'time',
    ];
}
