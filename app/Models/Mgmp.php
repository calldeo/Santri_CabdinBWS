<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MGMP extends Model
{
    use HasFactory;

    protected $table = 'mgmp';
    protected $primaryKey = 'id_sk';
    public $incrementing = false; // Matikan auto-increment
    protected $keyType = 'string'; // Set primary key sebagai string

    protected $fillable = ['nip', 'file_draft', 'status'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($mgmp) {
            $latest = self::orderBy('id_sk', 'desc')->first();
            $number = $latest ? intval(substr($latest->id_sk, 4)) + 1 : 10001;
            $mgmp->id_sk = 'MGMP' . $number;
        });
    }
}
