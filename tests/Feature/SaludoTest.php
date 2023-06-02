<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SaludoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/saludo');

        $response->assertStatus(200);
    }

    public function test_contenido(): void
    {
        $view = $this->view('saludo');
 
        $view->assertSee('Hola mundo');
    }
}
