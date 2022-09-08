<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Product;


class storeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
		$res = Product::factory(2)->create();
		//dd($res->getContent());
		$res->assertDatabaseHas('Product', $res->toArray());
        //$this->assertTrue(true);
    }
}
