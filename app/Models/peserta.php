<?php

namespace App\Models;


use App\Models\User;
use App\Models\keluarga;
use App\Models\pendanaan;
use App\Models\pendahuluan;
use App\Models\surveitatib;
use App\Models\keteranganpribadi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';

    protected $fillable = [
        'nama_lengkap',
        'agama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'nama_panggilan',
        'berat_badan',
        'tinggi_badan',
        'jumlah_saudara_kandung',
        'jumlah_saudara_tiri',
        'urutan_lahir',
        'nama_saudara_dan_usia',
        'alamat',
        'alergi',
        'penyakit',
        'informasi',
        'kategori_peserta',
        'pindahan_tk',
        'tanggal_pindahan',
        'tanggal_diterima',
        'kelompok',
        'status_all'
    ];

    

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function keluarga()
    {
        return $this->belongsTo(keluarga::class, 'id_keluarga', 'id');
    }
    public function pendahuluan()
    {
        return $this->belongsTo(pendahuluan::class, 'id_pendahuluan', 'id');
    }
    public function pribadi()
    {
        return $this->belongsTo(keteranganpribadi::class, 'id_pribadi', 'id');
    }
    public function survei()
    {
        return $this->belongsTo(surveitatib::class, 'id_survei', 'id');
    }
    public function pendanaan()
    {
        return $this->belongsTo(pendanaan::class, 'id_pendanaan', 'id');
    }

}