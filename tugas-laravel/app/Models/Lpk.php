<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lpk extends Model
{
    protected $guarded = [];

    public function kursuses()
    {
        return $this->hasMany(Kursus::class);
    }
}
