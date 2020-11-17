<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use App\Models\User;
use App\Models\Client;

class TestClientsApi extends TestCase
{
    
    public function testUserApi()
    {
        $user = User::factory()->create(); 
        Sanctum::actingAs(
            $user,
            ['view-clients']
        );

        $response = $this->getJson('/api/user');

        $response->assertStatus(200);
        $response->assertJson([
            'name' => $user->name
        ]);
    }
    
    public function testGetClientsApi()
    {
        $user = User::factory()->create(); 
        
        $client_data = ['name' => 'test name',
        'lastname' => 'test lastname',
        'age' => '23',
        'phone' => '234521357'];

        $client = new Client($client_data);

        $client->save();
        
        Sanctum::actingAs(
            $user,
            ['view-clients']
        );

        $response = $this->getJson('/api/clients');

        $response->assertStatus(200);
        $response->assertJsonCount(1);
        $response->assertJsonFragment([
            'name' => $client_data['name']
        ]);
    }

    public function testGuestCanNotGetClientsApi()
    {   

        $response = $this->getJson('/api/clients');

        $response->assertUnauthorized();

    }

    public function testUserWithoutTokenCanNotGetClientsApi()
    {
        $user = User::factory()->create(); 

        $response = $this->getJson('/api/clients');

        $response->assertUnauthorized();
    }
    
}

