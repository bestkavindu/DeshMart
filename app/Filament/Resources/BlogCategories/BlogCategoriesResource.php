<?php

namespace App\Filament\Resources\BlogCategories;

use App\Filament\Resources\BlogCategories\Pages\CreateBlogCategories;
use App\Filament\Resources\BlogCategories\Pages\EditBlogCategories;
use App\Filament\Resources\BlogCategories\Pages\ListBlogCategories;
use App\Filament\Resources\BlogCategories\Schemas\BlogCategoriesForm;
use App\Filament\Resources\BlogCategories\Tables\BlogCategoriesTable;
use App\Models\BlogCategories;
use App\Models\BlogCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class BlogCategoriesResource extends Resource
{
    protected static string|UnitEnum|null $navigationGroup = 'Blogs';

    protected static ?string $model = BlogCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Tag;

    protected static ?string $recordTitleAttribute = 'BlogCategories';
    protected static ?int $navigationSort = 3;

     public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Schema $schema): Schema
    {
        return BlogCategoriesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogCategoriesTable::configure($table);
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
            'index' => ListBlogCategories::route('/'),
            'create' => CreateBlogCategories::route('/create'),
            'edit' => EditBlogCategories::route('/{record}/edit'),
        ];
    }
}
