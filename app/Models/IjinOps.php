<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IjinOps extends Model
{
    use HasFactory;

    protected $table = 'ijin_operasi';
    protected $primaryKey = 'id_ijin';
    public $incrementing = false; // Matikan auto-increment
    protected $keyType = 'string'; // Set primary key sebagai string

    protected $fillable = ['file_pengajuan', 'tracking'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($ijin) {
            $latest = self::orderBy('id_ijin', 'desc')->first();
            $number = $latest ? intval(substr($latest->id_ijin, 3)) + 1 : 10001;
            $ijin->id_ijin = 'IJN' . $number;
        });
    }
}
