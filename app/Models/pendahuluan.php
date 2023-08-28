<?php

namespace App\Models;

use App\Models\peserta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pendahuluan extends Model
{
    use HasFactory;

    protected $table = 'pendahuluan';

    protected $fillable = [
        'latar_belakang',
        'harapan_keilmuan',
        'harapan_keilmuan_agama',
        'harapan_keilmuan_sosial',
        'jangka_waktu_belajar',
        'status'
    ];

   public function peserta()
    {
        return $this->hasOne(peserta::class);
    }
}