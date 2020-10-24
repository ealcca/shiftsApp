<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
        public function testClientNothingTurn()
    {
        $client = Client::factory()->create();
        $turn = $client->turn()->get();
        $this->assertEmpty($turn);
    }

    public function testClientFailTurns()
    {
        $client = Client::factory()
                        ->has(Turn::factory()->count(2))
                        ->create();
        $turns = $client->turns()->get();
        $this->assertTrue(false);
    }
}
