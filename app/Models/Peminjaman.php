<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;

    Protected $table = "Peminjaman";

    public $incrementing = "true";

    Protected $primaryKey = "PeminjamanID";

    Protected $keyType = "string";

    Protected $guarded = [];

    public function User(): BelongsTo{
        return $this->belongsTo(Userr::class,'UserID','UserID');
    }
    public function Buku(): BelongsTo{
        return $this->belongsTo(Buku::class,'BukuID','BukuID');
    }
}
