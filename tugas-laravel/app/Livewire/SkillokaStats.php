<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Kursus;
use App\Models\Lpk;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SkillokaStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Mitra LPK', Lpk::count())
                ->description(Lpk::where('status_verifikasi', 'approved')->count() . ' LPK Terverifikasi Disnaker')
                ->color('primary'),

            Stat::make('Program Kursus Aktif', Kursus::count())
                ->description('Tersedia di Kab. Indramayu')
                ->color('success'),

            Stat::make('Total Pemesanan (Booking)', Booking::count())
                ->description(Booking::where('status', 'pending')->count() . ' Menunggu Konfirmasi')
                ->color('warning'),
        ];
    }
}