<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class CheckSessionTimeoutMiddlewareTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_session_timeout_redirects_to_login(): void
    {
        Auth::login(User::factory()->create());

        Session::put('lastActivityTime', now()->subMinutes(config('session.lifetime') + 1)->timestamp);

        $response = $this->post('/login');

        $response->assertRedirect(route('login.store'));

    }
}
