<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()->schema([
                    TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('img')
                    ->label('Image')
                    ->image()
                    ->required(),
                ])
                    ->columns(2)
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->label('Description')
                    ->extraAttributes([
                        'style' => 'min-height: 400px;',
                    ])
                    ->required(),
            ])->columns(1);
    }
}
