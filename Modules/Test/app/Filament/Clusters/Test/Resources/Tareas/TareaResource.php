<?php

namespace Modules\Test\Filament\Clusters\Test\Resources\Tareas;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Test\Filament\Clusters\Test\Resources\Tareas\Pages\CreateTarea;
use Modules\Test\Filament\Clusters\Test\Resources\Tareas\Pages\EditTarea;
use Modules\Test\Filament\Clusters\Test\Resources\Tareas\Pages\ListTareas;
use Modules\Test\Filament\Clusters\Test\Resources\Tareas\Pages\ViewTarea;
use Modules\Test\Filament\Clusters\Test\Resources\Tareas\Schemas\TareaForm;
use Modules\Test\Filament\Clusters\Test\Resources\Tareas\Schemas\TareaInfolist;
use Modules\Test\Filament\Clusters\Test\Resources\Tareas\Tables\TareasTable;
use Modules\Test\Filament\Clusters\Test\TestCluster;
use Modules\Test\Models\Tarea;

class TareaResource extends Resource
{
    protected static ?string $model = Tarea::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = TestCluster::class;

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
