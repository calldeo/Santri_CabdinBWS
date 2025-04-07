<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiMasuk extends Model
{
    use HasFactory;

    protected $table = 'mutasi_masuk';
    protected $primaryKey = 'id_mut_masuk';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_mut_masuk', 'file_skk', 'file_nisn', 'file_raport', 'file_skm', 'status'
    ];

    // Generate ID otomatis sebelum insert
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($mutasi) {
            $mutasi->id_mut_masuk = 'MSK' . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        });
    }
}
