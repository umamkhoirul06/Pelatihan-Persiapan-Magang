<?php

namespace App\Filament\Resources\Lpks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LpkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_lpk')
                    ->required(),
                TextInput::make('lokasi')
                    ->required(),
                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(4.5),
                TextInput::make('status_verifikasi')
                    ->required()
                    ->default('pending'),
            ]);
    }
}
