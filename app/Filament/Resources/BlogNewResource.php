<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogNewResource\Pages;
use App\Filament\Resources\BlogNewResource\RelationManagers;
use App\Models\BlogNew;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogNewResource extends Resource
{
    protected static ?string $model = BlogNew::class;

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
                Forms\Components\RichEditor::make('description_ru')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description_uz')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description_en')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\TextInput::make('link'),
                Forms\Components\DatePicker::make('posted_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_ru')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),

                Tables\Columns\TextColumn::make('posted_at')
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListBlogNews::route('/'),
            'create' => Pages\CreateBlogNew::route('/create'),
            'view' => Pages\ViewBlogNew::route('/{record}'),
            'edit' => Pages\EditBlogNew::route('/{record}/edit'),
        ];
    }
}
