<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RouteTest extends TestCase
{

    private function getRoutes()
    {
        return [
            '/countries',
            '/airports',
            '/airlines',
            '/airline-routes'
        ];
        // $this->user = User::create(['name' => 'Test' , 'email' => 'test@test.lt', 'password' => Hash::make('123')]);
    }

    

    public function test_go_to_pages_without_auth()
    {
        foreach($this->getRoutes() as $route)
        {
            $response = $this->get($route);
            $response->assertStatus(302);
        }
    }

    public function test_go_to_pages_with_auth(){  
        
        $user = User::factory()->create();
        
        foreach($this->getRoutes() as $route)
        {
            $response = $this->actingAs($user)->get($route);
            $response->assertStatus(200);
        }

    }
}
