<?php

namespace App\Events;

use App\Models\Post;
use App\Models\User;
use App\Notifications\NewpostNotification;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Notification;

class NewPost implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    private Post $post;

    private int $id;

    /**
     * Create a new event instance.
     */
    public function __construct(Post $post, int $id)
    {
        $this->post = $post;

        $this->id = $id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new channel('App.Models.User.' . $this->id),
        ];
    }

    public function broadcastWith(): array
    {
        return [
             'username' => $this->post->user->username,
             'message' => 'created a new Post'
        ];
    }

    public function broadcastAs(): string
    {
        return 'post.created';
    }




}
