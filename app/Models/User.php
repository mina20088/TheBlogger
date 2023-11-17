<?php

namespace App\Models;


use App\Notifications\SendEmailVerificationNotification;
use App\Notifications\SendRestEmailNotification;
use App\Notifications\SendWelcomeEmailNotification;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notification;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

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
        'picture',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
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

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function passwords(): HasMany
    {
        return $this->hasMany(OldPassword::class);
    }

    public function logins():HasMany
    {
        return $this->hasMany(ActiveLogin::class);
    }


    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new SendRestEmailNotification($token));
    }


     public function sendEmailVerificationNotification(): void
     {
         $this->notify(new SendEmailVerificationNotification());
     }


    public function routeNotificationForEmail(Notification $notification)
    {
        return $this->email;
    }

}
