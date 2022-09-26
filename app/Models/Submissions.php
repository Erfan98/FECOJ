<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'who');
    }

    public function language()
    {
        return $this->belongsTo(Languages::class, 'lang');
    }
    public function prob()
    {
        return $this->belongsTo(ProblemSet::class, 'problem');
    }
}
