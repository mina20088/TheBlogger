<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static where(string $string, $id)
 */
class Session extends Model
{
    public function active(): HasOne
    {
        return $this->hasOne(ActiveLogin::class,'session_id');
    }
}
