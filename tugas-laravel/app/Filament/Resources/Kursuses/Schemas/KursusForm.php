<?php

namespace App\Filament\Resources\Kursuses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KursusForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('lpk_id')
                    ->required()
                    ->numeric(),
                TextInput::make('kategori_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nama_kursus')
                    ->required(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                TextInput::make('harga')
                    ->required()
                    ->numeric(),
                TextInput::make('durasi')
                    ->required(),
                TextInput::make('kuota')
                    ->required()
                    ->numeric()
                    ->default(20),
            ]);
    }
}
