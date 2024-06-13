<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobil extends Model
{

    use SoftDeletes;
    protected $table = 'mobils';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'image',
        'name',
        'slug',
        'license_plate',
        'rental_rate',
        'is_available',
        'brand_id',
        'model_brand_id',
        'description'
    ];

    public $incrementing = true;
    public $timestamps = true;

    public function brand() : BelongsTo {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function modelBrand() : BelongsTo {
        return $this->belongsTo(ModelBrand::class,'model_brand_id', 'id');
    }
       

}
