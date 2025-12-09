<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

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
        'incident_date',
        'incident_time',
        'time',
        'user_id',
        'status', 
    ];
}
