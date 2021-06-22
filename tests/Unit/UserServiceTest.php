<?php

namespace Tests\Unit;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_filter_johns_count()
    {

        User::factory()->count(8)->make();

        User::create([
            'name' => 'johny',
            'surname' => 'something',
            'email' => 'johny@teltonika.lt'
        ]);

        User::create([
            'name' => 'still',
            'surname' => 'johny',
            'email' => 'itsjohny@teltonika.lt'
        ]);

        $johnCount = app(UserService::class)->filterJohns()->count();

        $this->assertGreaterThanOrEqual($johnCount, 2);

    }
}
