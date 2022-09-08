<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;
use App\Models\User;

class ListProductTest extends TestCase
{
    public $model = Product::class;
    public $baseUrl = "http://laravel-api.com/api";
    public $resource = 'products';
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function it_can_list_product()
    {
        dd('inside list');
        $count = Product::count();
        $user = User::factory()->create();

        $token = $user->createToken('testing')->plainTextToken;
        $res = Product::factory()->count(10)->create();
      
        $res = $this->call('get',$this->baseUrl.'/'.$this->resource);

        dd($res->getContent());
        $res->assertJson($count+10, 'data')
        ->assertSuccessful();

        // $this->assertTrue(true);
    }

    function test(){
        return true;
    }
}
