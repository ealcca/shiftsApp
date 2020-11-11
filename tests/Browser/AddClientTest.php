<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class AddClientTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegisterClient()
    {
        $user = User::factory()->create([
            'email' => 'test@laravel.com',
            'password' => bcrypt('12345678')
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                    ->type('email',$user->email)
                    ->type('password','12345678')
                    ->press('LOGIN')
                    ->visit('/clients')
                    ->click('#Agregar')
                    ->type('name','anonimo')
                    ->type('lastname','aninimos')
                    ->type('age',25)
                    ->type('phone','2511111')
                    ->press('Agregar_cliente')
                    ->assertSee('Clientes');
        });
    }
}
