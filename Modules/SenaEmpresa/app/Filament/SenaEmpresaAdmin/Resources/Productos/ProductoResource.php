<?php

namespace Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\Pages\CreateProducto;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\Pages\EditProducto;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\Pages\ListProductos;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\Pages\ViewProducto;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\Schemas\ProductoForm;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\Schemas\ProductoInfolist;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\Tables\ProductosTable;
use Modules\SenaEmpresa\Models\Producto;

class ProductoResource extends Resource
{
    protected static ?string $model = Producto::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return ProductoForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProductoInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductosTable::configure($table);
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
            'index' => ListProductos::route('/'),
            'create' => CreateProducto::route('/create'),
            'view' => ViewProducto::route('/{record}'),
            'edit' => EditProducto::route('/{record}/edit'),
        ];
    }
}
