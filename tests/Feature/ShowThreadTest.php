<?php

namespace Tests\Feature;

use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowThreadTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_thread_will_be_shown_on_the_front_page()
    {
        $this->withoutExceptionHandling();

        $thread = Thread::factory()->create();

        $this->get('/threads')
            ->assertSee($thread->title);
    }

    /** @test */
    function a_thread_will_be_shown_on_its_own_page()
    {
        $thread = Thread::factory()->create();

        $this->get('/threads/' . $thread->id)
            ->assertSee($thread->title)
            ->assertSee($thread->body);
    }
}
