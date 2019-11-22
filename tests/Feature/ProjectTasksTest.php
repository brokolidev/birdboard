<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTasksTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_the_onwer_of_a_project_may_add_tasks()
    {
        $this->signIn();

        $project = factory('App\Project')->create();
        
        $this->post($project->path() . '/tasks', ['body' => 'Test task'])
            ->assertStatus(403);
        
        $this->assertDatabaseMissing('tasks', ['body' => 'Test task']);
    }

    /** @test */
    public function a_project_can_have_tasks()
    {
        // $this->withoutExceptionHandling();
        $this->signIn();
        $project = factory(Project::class)->create(['owner_id' => auth()->id()]);

        $this->post($project->path() . '/tasks', ['body' => 'Test tasks']);

        $this->get($project->path())
            ->assertSee('Test tasks');
    }

    /** @test */
    public function a_task_requires_a_body()
    {
        $this->signIn();
        $attributes = factory('App\Task')->raw(['body' => '']);
        $project = factory(Project::class)->create(['owner_id' => auth()->id()]);
        $this->post($project->path() . '/tasks', $attributes)->assertSessionHasErrors('body');
        
    }
}
