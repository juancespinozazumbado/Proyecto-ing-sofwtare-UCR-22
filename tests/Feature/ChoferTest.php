<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Chofer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChoferTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
        $chofer = Chofer::factory()->create(['id'=>'504020630']) ;
        $this->assertEquals('504020630', $chofer->id);


    }
}
