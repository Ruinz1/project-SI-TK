<?php

namespace App\Models;

use App\Models\ibu;
use App\Models\ayah;
use App\Models\wali;
use App\Models\peserta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class keluarga extends Model
{
    use HasFactory;

    protected $table = 'keluarga';

    public function peserta()
    {
        return $this->hasOne(peserta::class);
    }

    public function ayah()
    {
        return $this->belongsTo(ayah::class, 'id_ayah', 'id');
    }

    public function ibu()
    {
        return $this->belongsTo(ibu::class, 'id_ibu', 'id');
    }

    public function wali()
    {
        return $this->belongsTo(wali::class, 'id_wali', 'id');
    }


}