<?php

namespace Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class Tarea2Infolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('titulo'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
