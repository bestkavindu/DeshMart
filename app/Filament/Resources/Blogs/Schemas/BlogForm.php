<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Blog Details')->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required()
                        ->maxLength(255),

                    RichEditor::make('content')
                        ->label('Description')
                        ->extraAttributes([
                            'style' => 'min-height: 400px;',
                        ])
                        ->required(),
                ])
                    ->columns(1)
                    ->columnSpan(2),
                Section::make('Settings')->schema([
                    Toggle::make('is_featured')
                        ->label('Featured'),
                    Toggle::make('is_published')
                        ->label('Published'),
                    FileUpload::make('img')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('blogs')
                            ->required(),
                ])
                    ->columnSpan(1),

            ])
            ->columns(3);
    }
}
