<?php

namespace App\Models;

use App\Models\peserta;
use App\Models\informasipribadi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class keteranganpribadi extends Model
{
    use HasFactory;

    protected $table = 'keterangan_pribadi_murid';

    protected $fillable = [
        'kemampuan_baca_latin',
        'kemampuan_baca_hijaiyah',
        'kemampuan_menggambar',
        'kemampuan_anggka',
        'judul_buku_latin',
        'kemampuan_menulis',
        'kemampuan_berhitung',
        'tata_cara_berwudhu',
        'tata_cara_solat',
        'hafalan_juzamma',
        'hafalan_doa',
        'doa_harian_hafal',
        'hobi',
        'hafal_murotal',
        'berlangganan_majalah',
        'status'
    ];

    public function peserta()
    {
        return $this->hasOne(peserta::class);
    }

    public function informasi()
    {
        return $this->belongsTo(informasipribadi::class, 'id', 'id_pribadi');
    }
}