<?php

namespace Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Pages\CreateTarea2;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Pages\EditTarea2;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Pages\ListTarea2s;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Pages\ViewTarea2;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Schemas\Tarea2Form;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Schemas\Tarea2Infolist;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Tables\Tarea2sTable;
use Modules\Blog\Models\Tarea2;

class Tarea2Resource extends Resource
{
    protected static ?string $model = Tarea2::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'titulo';

    public static function form(Schema $schema): Schema
    {
        return Tarea2Form::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return Tarea2Infolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Tarea2sTable::configure($table);
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
            'index' => ListTarea2s::route('/'),
            'create' => CreateTarea2::route('/create'),
            'view' => ViewTarea2::route('/{record}'),
            'edit' => EditTarea2::route('/{record}/edit'),
        ];
    }
}
