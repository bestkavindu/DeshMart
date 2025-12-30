<?php

namespace App\Filament\Resources\Reviews\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class ReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('rating')
                        ->required()
                        ->numeric()
                        ->minValue(1)
                        ->maxValue(5),
                ]),

                Textarea::make('content')
                    ->rows(5)
                    ->required(),
                FileUpload::make('user_img')
                    ->image()
                    ->maxSize(1024),
            ])->columns(1);
    }
}
