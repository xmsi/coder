<?php

namespace App\Filament\Resources\BlogNewResource\Pages;

use App\Filament\Resources\BlogNewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogNews extends ListRecords
{
    protected static string $resource = BlogNewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
