<?php

namespace App\Filament\Resources\BlogCategories\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogCategoriesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->label('Category Name')
                    ->required(),
                TextInput::make('slug'),
                TextInput::make('color')
                    ->label('Color')
                    ->nullable()
                    ->maxLength(255),
            ]);
    }
}
