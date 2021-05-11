<?php

namespace Tests\Feature;

use App\Http\Controllers\ContragentsController;
use App\Models\Contragents;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContragentControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_FindDuplicate()
    {
        Contragents::factory()->state(['name_contragents' => 'Test'])->count(2)->create();
        $response = $this->getJson('/api/contragents/find-duplicate');
        $response->assertJsonFragment([
            'name_contragents' => 'Test',
        ]);

    }
}
