<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table = 'announcement';
    protected $primaryKey = 'announcement_id';
    public $incrementing = true; // or false if non-int
    protected $keyType = 'int';  // or 'string' if UUID

    protected $fillable = [
        'title',
        'body',
        'type',
        'user_id',
    ];
}

