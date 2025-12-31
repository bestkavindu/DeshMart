<?php

namespace App\Filament\Resources\Reviews\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Review Details')->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('rating')
                        ->required()
                        ->numeric()
                        ->minValue(1)
                        ->maxValue(5),

                    Textarea::make('content')
                    ->rows(5)
                    ->required(),

                ])->columnSpan(2),

                Section::make('Settings')->schema([
                    FileUpload::make('user_img')
                        ->label('User Image')
                        ->image()
                        ->disk('public')
                        ->directory('reviews'),
                    Toggle::make('is_featured')
                        ->label('Featured'),
                    Toggle::make('status')
                        ->label('Active'),
                ])->columnSpan(1),

            ])->columns(3);
    }
}
