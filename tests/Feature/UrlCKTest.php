<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UrlCK extends TestCase
{
    
    public function test_url_ok()
    {
        $response = $this->get('/jugar/1'); //Aca Response es un objeto que guarda el status de hacer el GET

        $response->assertStatus(200); //Se fija si el status de response es 200
    }
    public function test_jugarNoNumIs404()
    {
        $response = $this->get('/jugar'); //Aca Response es un objeto que guarda el status de hacer el GET
        
        $response->assertStatus(404); //Se fija si el status de response es 404
    }
}