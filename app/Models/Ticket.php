<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_pelapor',
        'id_teknisi',
        'id_sub_kategori',
        'id_lokasi',
        'jenis_pengaduan',
        'tanggal_pengaduan',
        'tanggal_proses',
        'tanggal_selesai',
        'keterangan',
        'troubleshooting',
        'status',
    ];

    public function pelapor(){
        return $this->belongsTo('App\Models\User', 'id_pelapor');
    }
    public function teknisi(){
        return $this->belongsTo('App\Models\User', 'id_teknisi');
    }
    public function subkategori(){
        return $this->belongsTo('App\Models\SubKategori', 'id_sub_kategori');
    }
    public function lokasi(){
        return $this->belongsTo('App\Models\Lokasi', 'id_lokasi');
    }
}
