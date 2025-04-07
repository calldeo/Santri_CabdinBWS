<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiKeluar extends Model
{
    use HasFactory;

    protected $table = 'mutasi_keluar';
    protected $primaryKey = 'id_mut_keluar';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_mut_keluar', 'file_skk', 'file_nisn', 'file_raport', 'file_skm', 'status'
    ];

    // Generate ID otomatis sebelum insert
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($mutasi) {
            $mutasi->id_mut_keluar = 'KLO' . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        });
    }
}
