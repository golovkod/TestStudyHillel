<?php

namespace Database\Factories;

use App\Models\Contragents;
use App\Models\Goods;
use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_goods' => Goods::factory()->create(),
            'quantity' => $this->faker->numberBetween(100, 500),
            'id_contragents' => Contragents::factory()->create(),
        ];
    }

}
