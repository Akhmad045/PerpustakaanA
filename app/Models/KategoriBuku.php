<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriBuku extends Model
{
    use HasFactory;

    Protected $table = "Kategori_Buku";

    public $incrementing = "true";

    Protected $primaryKey = "KategoriID";

    Protected $keyType = "string";

    Protected $guarded = [];

    public function Buku(): HasMany{
        return $this->hasMany(Buku::class,'KategoriID','KategoriD');
    }
}
