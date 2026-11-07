<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $guarded = [];

    public function lpk()
    {
        return $this->belongsTo(Lpk::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
