<?php

namespace App\Filament\Resources\BlogNewResource\Pages;

use App\Filament\Resources\BlogNewResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBlogNew extends ViewRecord
{
    protected static string $resource = BlogNewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
