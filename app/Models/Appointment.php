<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointment';
    protected $primaryKey = 'appointment_id';

    protected $fillable = [
        'user_id',
        'service',
        'symptoms',
        'time',
        'date',
        'status',
    ];

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}