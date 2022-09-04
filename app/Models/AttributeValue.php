<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeValue extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'attribute_values';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'value_en',
        'value_ar',
        'attribute_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function attributeValueInventories()
    {
        return $this->belongsToMany(Inventory::class);
//        return $this->morphToMany(Inventory::class,'attribute_value_inventory');
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getValueAttribute(){
        if(\App::getLocale() == 'en'){
            return $this->value_en;
        }else{
            return $this->value_ar;
        }
    }
}
