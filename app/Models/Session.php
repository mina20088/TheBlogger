<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use stdClass;

class Session extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',   
        'last_activity' => 'datetime',
        'user_agent' => 'array'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }   


    protected function userAgent():Attribute
    {
        return Attribute::make(
            get: fn($value)=> Str::of($value)
                   ->replaceArray('/[;:/()]/+',[" "])
                   ->trim()
                   ->explode(' ')
        );
    }

    
}
