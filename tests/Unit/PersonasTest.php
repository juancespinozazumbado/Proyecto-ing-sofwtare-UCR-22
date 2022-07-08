<?php

namespace Tests\Unit;

use App\Models\Persona;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


 

class PersonasTest extends TestCase

{
    use RefreshDatabase;
    /** @test */
    public function Una_Persona_Tiene_Cedula_test()
    {
        
        $Persona =  Persona::factory()->create(['cedula'=>'504020630']) ;//new Persona(['cedula'=>'504020630', 'nombre'=> 'Juan Carlos']);

        $this->assertEquals('504020630', $Persona->cedula);

    }
}
