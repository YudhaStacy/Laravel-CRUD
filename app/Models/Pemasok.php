<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pemasok';
    protected $table = 'pemasok';

    protected $fillable = [
        'nama',
        'alamat',
        'no_tlp'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_pemasok', 'id_pemasok');
    }
}
