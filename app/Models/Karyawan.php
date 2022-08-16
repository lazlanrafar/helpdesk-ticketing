<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_lokasi',
        'nama',
        'jabatan',
        'alamat',
    ];
    
    public function lokasi(){
        return $this->belongsTo('App\Models\Lokasi', 'id_lokasi');
    }
}
