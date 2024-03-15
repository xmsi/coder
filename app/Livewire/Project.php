<?php

namespace App\Livewire;

use App\Models\Project as ModelsProject;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\View\View;
use Livewire\Component;

class Project extends Component
{
    public function render(): View
    {
        $years_with_type = ModelsProject::selectRaw("DISTINCT type, strftime('%Y', started_at) AS year")
            ->orderBy('year', 'DESC')
            ->get()
            ->toArray();

        $years = [];
        foreach ($years_with_type as $year_with_type) {
            $years[$year_with_type['type']][] = $year_with_type['year'];
        }

        return view('livewire.project', compact('years'));
    }

}
