<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['user_id', 'date', 'time', 'location', 'type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi Many-to-Many dengan User
    public function users()
    {
        return $this->belongsToMany(User::class, 'schedule_user', 'schedule_id', 'user_id');
    }
}
