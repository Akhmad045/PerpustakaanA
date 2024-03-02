<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UlasanBuku extends Model
{
    use HasFactory;

    Protected $table = "Ulasan_Buku";

    public $incrementing = "true";

    Protected $primaryKey = "UlasanID";

    Protected $keyType = "string";

    Protected $guarded = [];

    public function Buku(): BelongsTo{
        return $this->belongsTo(Buku::class,'BukuID','BukuID');
    }
    public function User(): BelongsTo{
        return $this->belongsTo(Userr::class,'UserID','UserID');
    }
}
