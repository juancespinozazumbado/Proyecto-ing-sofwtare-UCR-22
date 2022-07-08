<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Persona;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PersonaTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    
    public function test_example()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);

        $persona = Persona::factory()->create();

        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $persona->add($user1);
        $persona->add($user2);

        $this-> assertEquals(2, $persona->members()->count());




    }

     /** @test */
    
     public function cont_test()
     {
         // $response = $this->get('/');
 
         // $response->assertStatus(200);
 
         $persona = Persona::factory()->create(['cedula'=>2]);
         $user1 = User::factory()->create();
         $user2 = User::factory()->create();
         $persona->add($user1);
         $persona->add($user2);
 
         $this-> assertEquals(2, $persona->members()->count());

         $this->expectException('Exception');

         $user3 = User::factory()->create();
         $persona->add($user3);

 
 
 
 
     }
 
}
