<?php

namespace App\Models;

use App\Models\User;

use App\Models\peserta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pendanaan extends Model
{
    use HasFactory;

    protected $table = 'pendanaan';

    protected $fillable = [
        'pemasukan_ortu',
        'kenaikan_konsumsi',
        'infaq',
        'status'
    ];

    public function peserta()
    {
        return $this->hasOne(peserta::class);
    }
    
}