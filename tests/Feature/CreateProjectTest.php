<?php

namespace Tests\Feature;

use App\Filament\Resources\ProjectResource\Pages\CreateProject;
use Database\Factories\ProjectFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CreateProjectTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $filled_array = (new ProjectFactory())->definition();

        Livewire::test(CreateProject::class)->fillForm($filled_array)
                                            ->call('create')
                                            ->assertHasNoFormErrors();

    }
}
