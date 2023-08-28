<?php

namespace App\Models;

use App\Models\keteranganpribadi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class informasipribadi extends Model
{
    use HasFactory;

    protected $table = 'informasi_keadaan_anak';

    protected $fillable = [
        'tinggal_bersama',
        'jumlah_penghuni_dewasa',
        'jumlah_penghuni_anak',
        'halaman_bermain',
        'kesempatan_bergaul',
        'selera_makan',
        'hubungan_ayah',
        'hubungan_ibu',
        'hubungan_saudara',
        'kemampuan_buang_air',
        'kebiasan_tidur_malam',
        'kebiasan_bangun_pagi',
        'kebiasan_tidur_siang',
        'kebiasaan_ngompol',
        'hal_penting_waktu_tidur',
        'kepatuhan_anak',
        'hal_penting_tingkahlaku_anak',
        'mudah_bergaul',
        'sifat_baik',
        'sifat_buruk',
        'pembantu_rumah_tangga',
        'peralatan_elektronik'
    ];

    public function pribadi()
    {
       return $this->hasOne(keteranganpribadi::class);
    }
}