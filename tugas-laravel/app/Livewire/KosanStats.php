<?php

namespace App\Filament\Widgets;

use App\Models\Kamar;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KosanStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Kamar', Kamar::count())
                ->description('Semua kamar terdaftar')
                ->color('primary'),

            Stat::make('Kamar Tersedia', Kamar::where('status', 'Tersedia')->count())
                ->description('Siap disewakan')
                ->color('success'),

            Stat::make('Kamar Terisi', Kamar::where('status', 'Terisi')->count())
                ->description('Sedang dihuni')
                ->color('warning'),
        ];
    }
}