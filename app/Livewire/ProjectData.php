<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\Attributes\On;

class ProjectData extends Component
{
    public Collection $projects;

    public int $initialYear;

    #[On('year_selected')]
    public function updateData(int $type, int $year)
    {
        $this->getResult($year, $type);
        // $this->dispatch('contentChanged');
    }

    public function render()
    {
        if (!isset($this->projects)) {
            $this->getResult($this->initialYear);
        }

        return view('livewire.project-data');
    }

    private function getResult($year, $type = 0){
        $this->projects = Project::whereYear('started_at', $year)->where('type', $type)->orderBy('started_at', 'desc')->get();
    }
}
