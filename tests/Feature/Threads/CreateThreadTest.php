<?php

namespace Tests\Feature\Threads;

use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateThreadTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function authenticated_users_can_create_a_thread()
    {
        $this->signIn();

        $thread = Thread::factory()->make();

        $this->post(route('threads.store', $thread->toArray()));

        $this->assertDatabaseCount('threads', 1);

    }

    /** @test */
    function a_thread_title_is_required()
    {
        $this->signIn();

        $thread = Thread::factory()->make(['title' => null]);

        $this->post(route('threads.store', $thread->toArray()))
            ->assertSessionHasErrors(['title']);
    }

    /** @test */
    function a_thread_body_is_required()
    {
        $this->signIn();

        $thread = Thread::factory()->make(['body' => null]);

        $this->post(route('threads.store', $thread->toArray()))
            ->assertSessionHasErrors(['body']);
    }

    /** @test */
    function guests_may_not_create_a_thread()
    {
        $this->post(route('threads.store'))
            ->assertRedirect(route('login'));
    }
}
