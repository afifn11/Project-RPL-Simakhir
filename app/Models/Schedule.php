<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['user_id', 'date', 'time', 'location', 'type', 'note', 'title', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function document()
    {
        return $this->hasOne(Document::class, 'user_id', 'user_id'); // Relasi ke Document
    }

    public function result()
    {
        return $this->hasOne(Result::class); // Relasi ke hasil penilaian
    }

    public function getGradeAttribute()
    {
        return $this->result ? $this->result->score : null;
    }

    public function getCommentAttribute()
    {
        return $this->result ? $this->result->comments : null;
    }
    

}

