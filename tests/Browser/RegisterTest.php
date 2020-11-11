<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {

        $user = User::factory()->make([
            'email' => 'test@laravel.com',
            'password' => bcrypt('123456789')
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/register')
                    ->type('name',$user->name)
                    ->type('email',$user->email)
                    ->type('password','12345678')
                    ->type('password_confirmation','12345678')
                    ->press('REGISTER')
                    ->assertSee('Dashboard');
        });
    }
}
