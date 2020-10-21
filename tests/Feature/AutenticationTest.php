<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AutenticationTest extends TestCase
{
    private $pagelogin = '/login';

    public function testSecurityLogin()
    {
        $response = $this->get('/turns');
        $response->assertRedirect($this->$pagelogin);
    }
}
