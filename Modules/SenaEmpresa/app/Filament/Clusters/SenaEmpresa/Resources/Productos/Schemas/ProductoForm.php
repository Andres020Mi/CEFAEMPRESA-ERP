<?php

namespace Modules\SenaEmpresa\Filament\Clusters\SenaEmpresa\Resources\Productos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
   TextInput::make('nombre')
                    ->required(),
                    
                FileUpload::make('imagen')
                    ->image()
                    ->imageEditor()
                    ->required(),

                Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
