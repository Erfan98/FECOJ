<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProblemSet extends Model
{
    use HasFactory;
        protected $fillable = ['title',
                                'statement',
                                'sample_input',
                                'sample_output',
                                'notes',
                                'standerd_input',
                                'standerd_output',
                                'cpu_limit',
                                'mem_limit',
                                'source_limit'
                            ];

    public function submissions()
        {
            return $this->hasMany(Submissions::class);
        }
}
