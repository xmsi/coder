<?php

namespace App\Filament\Resources\BlogNewResource\Pages;

use App\Filament\Resources\BlogNewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogNew extends EditRecord
{
    protected static string $resource = BlogNewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
