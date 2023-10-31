<?php

namespace Tests\Feature;

use App\Mail\RegistrationWelcomeEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class RegistrationCheckTest extends TestCase
{
    /** @test */
    public function check_register_user_send_welcome_email(): void
    {
        $user_data = [
            'first_name' => 'mina',
            'last_name' => 'shaker',
            'username' =>  'mina20088',
            'phone' => '01001777794',
            'email' => 'minaremonshaker@gmail.com',
            'password' => 'Hecaro1986@',
            'password_confirmation' =>'Hecaro1986@'
        ];

        $res = $this->post(route('register.store'), $user_data);

        $res->assertRedirect('/dashboard');


        array_splice($user_data,5,2);

        $this->assertDatabaseHas('users',$user_data);



    }
}
