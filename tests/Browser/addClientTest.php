<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class addClientTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */

    public function testCreateCliente()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
            ->type('name','test')
            ->type('email','test@test.com')
            ->type('password','12345678')
            ->press('REGISTER')
            ->visit('clients/create')
            ->type('name','Bertha')
            ->type('lastname','Beltran')
            ->type('age','25')
            ->type('phone','249-258596')
            ->click('AGREGAR CLIENTE')
            ->assertSee('Clientes');


        });
    }
}
