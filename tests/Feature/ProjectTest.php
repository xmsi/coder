<?php

namespace Tests\Feature;

use App\Livewire\ProjectData;
use App\Models\Project;
use Database\Seeders\ProjectSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Collection;
use Livewire\Livewire;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->seed(ProjectSeeder::class);

        $projects = Project::orderBy('started_at', 'desc')->get();

        Livewire::test(ProjectData::class, ['initialYear' => (int)$projects[0]->started_at])
                ->assertSee($projects[0]->getLocalizedAttribute('title'));
    }
}
