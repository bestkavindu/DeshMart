<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Dom\Text;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('content')

                    ->label('Content')
                    ->required(),
            ])->columns(1);
    }
}
