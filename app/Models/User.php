<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $keyType = 'string';
    //pgsql is dumb if it works now!

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'name' ,
            'email',
            'handle',
            'website',
            'company',
            'institution',
            'grad_year',
            'Location',
            'last_seen',
            'default_lang',
            'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function submissions()
    {
        return $this->hasMany(Submissions::class,'who');
    }

    public function lang_name(){
        return $this->belongsTo(Languages::class,'default_lang');
    }
    public function problems(){
        return $this->hasMany(ProblemSet::class,'author');
    }
}
