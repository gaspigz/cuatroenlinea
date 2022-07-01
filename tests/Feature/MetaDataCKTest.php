<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MetaDataCK extends TestCase
{
    
    public function test_encoding()
    {
        for($i=1;$i<=7;$i++){
            $response = $this->get('/jugar'.'/'.$i);
            $pagina = $response->getContent(); //El html
            echo substr_count($pagina, '<meta charset="utf-8">');
            $this->assertEquals(1,substr_count($pagina, '<meta charset="utf-8">'));
            //print_r($pagina);
            //$response->AssertStatus(200);
        }
    }
    public function test_lang_en()
    {
        for($i=1;$i<=7;$i++){
            $response = $this->get('/jugar'.'/'.$i);
            $pagina = $response->getContent(); //El html
            $this->assertEquals(1,substr_count($pagina, '<html lang="en">'));
            //print_r($pagina);
            //$response->AssertStatus(200);
        }
    }
    
}