<?php

namespace Tests\Feature;

use App\Models\Contragents;
use App\Models\Goods;
use App\Models\Orders;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrdersCotrollerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_FindOrder()
    {
         Orders::factory()->state([
            'id_contragents' => 123
        ])->createOne();

        $response = $this->getJson('/api/order/findbycontragent');
        $response->assertJsonFragment([
                'id_contragents' => 123
            ]
        );
    }
}
