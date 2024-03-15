<?php

namespace App\Livewire;

use App\Models\BlogNew;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $language = app()->getLocale();
        $blogNews = BlogNew::selectRaw("title_$language AS title, description_$language AS description, image, link, posted_at, created_at")->latest();
        return view('livewire.index', compact('blogNews'));
    }
}
