<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\BroadcastableModelEventOccurred;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * @method static truncate()
 */
class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
        'excrept',
        'slug'

    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //created at mutator
    protected function createdAt():Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Carbon::parse($value)->diffForHumans()
        );
    }

    public function broadcastOn(string $event): array
    {
/*        return (new BroadcastableModelEventOccurred(
            $this,$event
        ))->dontBroadcastToCurrentUser();*/

        return match ($event){
            'created' => [],
            default => [$this, $this->user],
        };
    }
}
