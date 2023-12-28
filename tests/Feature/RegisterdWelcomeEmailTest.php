<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendRegisterdUserEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterdWelcomeEmailTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_notification_send(): void
    {

        $user = User::factory()->make([
            'first_name' => 'georget',
            'last_name' => 'wadi',
            'username'=> 'georget',
            'email' => 'minaremon1986@gmail.com',
            'phone' => '01223530677',
            'picture' => '/app/whatever',
            'password' => 'Hecaro122@',
        ]);

      
        
        Notification::fake();

        $user->notify(new SendRegisterdUserEmail()); 

        Notification::assertSentTo($user,SendRegisterdUserEmail::class);
    }

    public function test_notifiaction_not_sent(){
        $user = User::factory()->make([
            'first_name' => 'georget',
            'last_name' => 'wadi',
            'username'=> 'georget',
            'email' => '',
            'phone' => '01223530677',
            'picture' => '/app/whatever',
            'password' => 'Hecaro122@',
        ]);

        Notification::fake();

        $user->notify(new SendRegisterdUserEmail());

        Notification::assertCount(0);
        
    }
}
