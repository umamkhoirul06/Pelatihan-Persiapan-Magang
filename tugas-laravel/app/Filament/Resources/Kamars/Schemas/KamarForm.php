<?php

namespace App\Filament\Resources\Kamars\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KamarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nomor_kamar')
                    ->required(),
                TextInput::make('tipe')
                    ->required(),
                TextInput::make('harga')
                    ->required()
                    ->numeric(),
                TextInput::make('status')
                    ->required()
                    ->default('Tersedia'),
            ]);
    }
}
