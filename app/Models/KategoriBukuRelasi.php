<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KategoriBukuRelasi extends Model
{
    use HasFactory;

    Protected $table = "Kategori_Buku_Relasi";

    public $incrementing = "true";

    Protected $primaryKey = "KategoriBukuID";

    Protected $keyType = "string";

    Protected $guarded = [];

    public function Buku(): BelongsTo{
        return $this->belongsTo(Buku::class,'BukuID','BukuID');
    }
    public function Kategori(): BelongsTo{
        return $this->belongsTo(KategoriBuku::class,'KategoriID','KategoriID');
    }
}
