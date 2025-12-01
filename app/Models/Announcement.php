<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $primaryKey = 'announcement_id';

    protected $table = 'announcement';

    protected $fillable = [
        'title',
        'body',
        'type',
        'user_id',
    ];
    
}
