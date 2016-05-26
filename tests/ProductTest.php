<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    use WithoutMiddleware;


    public function testRetrieveProduct()
    {
        $baseUrl = 'http://localhost:8000/apicarasa/product';
        $this->visit($baseUrl)
             ->seeJson([
                 'message' =>"Product Retrieval Success!",
             ]);
    }
}
