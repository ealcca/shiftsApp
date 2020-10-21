<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {

        $user = User::factory()->create([
            'email' => 'test@laravel.com',
            'password' => bcrypt('12345678')
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/register')
                    ->assertSee('Laravel')
                    ->type('name',$user->name)
                    ->type('email',$user->email)
                    ->type('password','12345678')
                    ->press('REGISTER')
                    ->assertSee('Dashboard');
        });
    }
}
