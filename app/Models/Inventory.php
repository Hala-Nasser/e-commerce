<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'inventories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'price',
        'quantity',
        'discount_percentage',
        'weight',
        'product_id',
        'attribute_value_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function invintoryOrderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'invintory_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function attribute_value()
    {
        return $this->belongsTo(AttributeValue::class, 'attribute_value_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
