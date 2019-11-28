<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProductCalcPrice()
    {
        $response = $this->json('POST', '/products/1/price', ['qty' => 10]);
        $response
            ->assertStatus(201)
            ->assertJsonStructure(['price']);
    }
}
