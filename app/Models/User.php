<?php

namespace App\Models;


use App\Notifications\SendEmailVerificationNotification;
use App\Notifications\SendRestEmailNotification;
use App\Notifications\SendWelcomeEmailNotification;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
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


    public function follower(): BelongsToMany
    {
        return $this
            ->belongsToMany(User::class,'follower_user','follower_id','user_id')
            ->withTimestamps();
    }

    public function followings(): BelongsToMany
    {
        return $this
            ->belongsToMany(User::class,'follower_user','user_id','follower_id')
            ->withTimestamps();
    }


    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new SendRestEmailNotification($token));
    }

    public function sendEmailVerificationNotification(): void
    {
        $this->notify(new SendEmailVerificationNotification());
    }

    public function FullName():string
    {
         return  Str::of($this->first_name)->append(' ',$this->last_name);
    }
    public  function follows(User $user): bool
    {
        return $this->followings()->where('id',$user->id)->exists();
    }

}
