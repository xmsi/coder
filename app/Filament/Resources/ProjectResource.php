<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title_ru')
                    ->required(),
                Forms\Components\TextInput::make('title_uz')
                    ->required(),
                Forms\Components\TextInput::make('title_en')
                    ->required(),
                Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        0 => 'Проекты',
                        1 => 'Партнёрские проекты'
                    ])
                    ->default(0),
                Forms\Components\RichEditor::make('description_ru')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description_uz')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description_en')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('logos')
                    ->multiple(),
                Forms\Components\FileUpload::make('images')
                    ->multiple(),
                Forms\Components\DatePicker::make('started_at')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_ru')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('title_uz')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('title_en')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('type')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('started_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
