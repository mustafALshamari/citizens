<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CitizenTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_citizen_compare_name()
    {
        $formData = [
            'fullName' => 'ali'
        ];
        
        $this->get(route('find-name'), $formData)->assertStatus(200);
    }
}
