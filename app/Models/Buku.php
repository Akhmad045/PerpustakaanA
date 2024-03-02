<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    use HasFactory;

    Protected $table = "Buku";

    public $incrementing = "true";

    Protected $primaryKey = "BukuID";

    Protected $keyType = "string";

    Protected $guarded = [];

    public function Koleksi(): HasMany{
        return $this->hasMany(KoleksiPribadi::class,'BukuID','BukuID');
    }
    public function Kategori(): HasMany{
        return $this->hasMany(KategoriBukuRelasi::class,'BukuID','BukuID');
    }
    public function Ulasan(): HasMany{
        return $this->hasMany(UlasanBuku::class,'BukuID','BukuID');
    }
    public function Peminjaman(): HasMany{
        return $this->hasMany(Peminjaman::class,'BukuID','BukuID');
    }
}
