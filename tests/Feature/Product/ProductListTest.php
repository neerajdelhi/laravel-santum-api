<?php

namespace Tests\Feature\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/products');

        // dd($response->getContent());
        $response->assertStatus(200);
    }
    public function test_single_product(){
        $res = $this->get('/api/products/1');

        dd($res->getContent());
        $res->assertStatus(200);
    }
}
