<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        $response = $this->post('/register', [
            'first_name' => 'georget',
            'last_name' => 'wadi',
            'username'=> 'georget',
            'email' => 'georget@gmail.com',
            'phone' => '01223530677',
            'picture' => '/app/whatever',
            'password' => 'Hecaro122@',
            'password_confirmation' => 'Hecaro122@' 
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_password_validation(): void
    {

        $response = $this->post('/register',[
            'first_name' => 'georget',
            'last_name' => 'wadi',
            'username'=> 'georget',
            'email' => 'georget@gmail.com',
            'phone' => '01223530677',
            'picture' => '/app/whatever',
            'password' => 'Hecaro122@',
            'password_confirmation' => 'Hecaro122@' 
        ]); 

        $response
          ->assertSessionDoesntHaveErrors(['password'])
          ->assertRedirect(RouteServiceProvider::HOME)
          ->assertStatus(302);
    }
}
