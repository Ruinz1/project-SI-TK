<?php

namespace App\Models;


use App\Models\peserta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class surveitatib extends Model
{
    use HasFactory;

    protected $table = 'survei_tatib';

    protected $fillable = [
        'tidak_boleh_ditunggu',
        'berpakaian_islami',
        'larangan_berpakaian_perhiasan',
        'kehadiran_dua_bulan',
        'tatib_merokok',
        'gizi_sehat',
        'kontrol_pengembangan',
        'kerja_sama',
        'status'
    ];

   public function peserta()
    {
        return $this->hasOne(peserta::class);
    }
}