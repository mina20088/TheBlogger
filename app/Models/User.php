<?php

namespace App\Models;

use App\Models\Passwords;
use Laravel\Sanctum\HasApiTokens;
use App\Jobs\ProcessEmailVerification;
use App\Jobs\ProcessPasswordResetEmail;

use Illuminate\Notifications\Notifiable;
use function Illuminate\Events\queueable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\SendEmailVerificationNotification;
use App\Notifications\SendPasswordResetConfirmationNotification;
use Illuminate\Foundation\Auth\User as AuthUser;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'phone',
        'email',
        'picture',
        'password',
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
        'password' => 'hashed',
    ];

    protected static function booted()
    {
        static::created(queueable(function(User $user){
            Passwords::create([
                'user_id' => $user->id,
                'password' => $user->password
            ]);
        })->onQueue('passwords'));
    }

    public function passwords(){
        return $this->hasMany(Passwords::class);
    }


    public function sendPasswordResetNotification($token)
    {
        ProcessPasswordResetEmail::dispatch($this,$token);  
    }

    public function sendEmailVerificationNotification()
    {
        ProcessEmailVerification::dispatch($this);
    }

}
    