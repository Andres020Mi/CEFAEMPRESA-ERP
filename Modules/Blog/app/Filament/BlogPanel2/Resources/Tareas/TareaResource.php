<?php

namespace Modules\Blog\Filament\BlogPanel2\Resources\Tareas;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Blog\Filament\BlogPanel2\Resources\Tareas\Pages\CreateTarea;
use Modules\Blog\Filament\BlogPanel2\Resources\Tareas\Pages\EditTarea;
use Modules\Blog\Filament\BlogPanel2\Resources\Tareas\Pages\ListTareas;
use Modules\Blog\Filament\BlogPanel2\Resources\Tareas\Pages\ViewTarea;
use Modules\Blog\Filament\BlogPanel2\Resources\Tareas\Schemas\TareaForm;
use Modules\Blog\Filament\BlogPanel2\Resources\Tareas\Schemas\TareaInfolist;
use Modules\Blog\Filament\BlogPanel2\Resources\Tareas\Tables\TareasTable;
use Modules\Blog\Models\Tarea;

class TareaResource extends Resource
{
    protected static ?string $model = Tarea::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'titulo';

    public static function form(Schema $schema): Schema
    {
        return TareaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TareaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TareasTable::configure($table);
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
            'index' => ListTareas::route('/'),
            'create' => CreateTarea::route('/create'),
            'view' => ViewTarea::route('/{record}'),
            'edit' => EditTarea::route('/{record}/edit'),
        ];
    }
}
