<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activityLogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'activity', 'ip_address', 'user_agent'
    ];
}
