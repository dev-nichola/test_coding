<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'slug',
    ];

    public function modelBrand(): HasMany {
        return $this->hasMany(ModelBrand::class,'brand_id', 'id');
    }

    public function mobil() : HasMany
    {
        return $this->hasMany(Mobil::class, 'brand_id', 'id');
    }

}
