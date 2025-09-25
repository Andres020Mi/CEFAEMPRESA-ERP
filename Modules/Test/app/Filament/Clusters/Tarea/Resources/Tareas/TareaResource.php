<?php

namespace Modules\Test\Filament\Clusters\Tarea\Resources\Tareas;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Test\Filament\Clusters\Tarea\Resources\Tareas\Pages\CreateTarea;
use Modules\Test\Filament\Clusters\Tarea\Resources\Tareas\Pages\EditTarea;
use Modules\Test\Filament\Clusters\Tarea\Resources\Tareas\Pages\ListTareas;
use Modules\Test\Filament\Clusters\Tarea\Resources\Tareas\Pages\ViewTarea;
use Modules\Test\Filament\Clusters\Tarea\Resources\Tareas\Schemas\TareaForm;
use Modules\Test\Filament\Clusters\Tarea\Resources\Tareas\Schemas\TareaInfolist;
use Modules\Test\Filament\Clusters\Tarea\Resources\Tareas\Tables\TareasTable;
use Modules\Test\Filament\Clusters\Tarea\TareaCluster;
use Modules\Test\Models\Tarea;

class TareaResource extends Resource
{
    protected static ?string $model = Tarea::class;

    protected static ?string $label = 'bbbbb';
    protected static ?string $pluralLabel = 'aaaa';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = TareaCluster::class;

    protected static ?string $recordTitleAttribute = 'nombre';

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
