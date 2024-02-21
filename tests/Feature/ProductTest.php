<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    //Az adott termék típus (paraméter az elsődleges kulcs)-hoz
    // tartozó összes termék adatait jelenítsd meg (fg+with)!
    public function product_database():void
    {
        $this = Product::factory()->create();
        $product = $this->
    }
}
