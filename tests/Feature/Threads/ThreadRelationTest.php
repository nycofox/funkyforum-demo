<?php

namespace Tests\Feature\Threads;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ThreadRelationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_thread_belongs_to_a_user()
    {
        $thread = Thread::factory()->create();

        $this->assertInstanceOf(User::class, $thread->user);
    }
}
