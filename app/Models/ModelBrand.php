<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ModelBrand extends Model
{  
    protected $table ='model_brands';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'name',
        'slug',
        'brand_id'
    ];

    public $incrementing = true;
    public $timestamps = true;
    public function brand() : BelongsTo {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
   

}
