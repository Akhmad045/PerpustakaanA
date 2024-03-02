<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Userr extends Model
{
    use HasFactory;

    Protected $table = "User";

    public $incrementing = "true";

    Protected $primaryKey = "UserID";

    Protected $keyType = "string";

    Protected $guarded = [];

    public function Peminjaman() :HasMany{
        return $this->hasMany(Peminjaman::class,'UserID','UserID');
    }

    public function Koleksi_Pribadi(): HasMany{
        return $this->hasMany(KoleksiPribadi::class,'UserID','UserID');
    }

    public function Ulasan(): HasMany{
        return $this->hasMany(UlasanBuku::class,'UserID','UserID');
    }
}
