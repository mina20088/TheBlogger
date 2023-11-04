<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActiveLogin extends Model
{
    protected $fillable = [
        'user_id',
        'session_id',
        'logout',
        'ip_address',
        'user_agent',
        'status'
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn($status) => $status == 1 ? 'active' : 'passive'
        );
    }
}
