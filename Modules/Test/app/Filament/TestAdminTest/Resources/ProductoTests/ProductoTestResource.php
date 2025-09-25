<?php

namespace Modules\Test\Filament\TestAdminTest\Resources\ProductoTests;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\Pages\CreateProductoTest;
use Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\Pages\EditProductoTest;
use Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\Pages\ListProductoTests;
use Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\Pages\ViewProductoTest;
use Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\Schemas\ProductoTestForm;
use Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\Schemas\ProductoTestInfolist;
use Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\Tables\ProductoTestsTable;
use Modules\Test\Models\ProductoTest;

class ProductoTestResource extends Resource
{
    protected static ?string $model = ProductoTest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return ProductoTestForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProductoTestInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductoTestsTable::configure($table);
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
            'index' => ListProductoTests::route('/'),
            'create' => CreateProductoTest::route('/create'),
            'view' => ViewProductoTest::route('/{record}'),
            'edit' => EditProductoTest::route('/{record}/edit'),
        ];
    }
}
