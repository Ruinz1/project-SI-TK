<?php

namespace App\Models;

use App\Models\User;
use App\Models\peserta;
use App\Models\keluarga;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ayah extends Model
{
    use HasFactory;
    protected $table = 'ayah';

    protected $fillable = [
        'nama_lengkap',
        'agama',
        'pendidikan',
        'tanggal_lahir',
        'tempat_lahir',
        'pekerjaan',
        'alamat',
        'alamat_kantor',
        'nomor_telepon_rumah',
        'nomor_telepon_kantor',
        'no_whatsapp',
        'status'
    ];

    public function keluarga()
    {
        return $this->hasOne(keluarga::class);
    }


}
