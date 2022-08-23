<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const WITH_DELIVERY_RADIO = [
        'with delivery'    => '1',
        'without delivery' => '0',
    ];

    public $table = 'orders';

    protected $dates = [
        'delivery_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'total_order_weight',
        'total_price',
        'delivery_date',
        'delivery_time',
        'with_delivery',
        'user_id',
        'address_id',
        'status_id',
        'payment_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function orderOrderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }

    public function getDeliveryDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDeliveryDateAttribute($value)
    {
        $this->attributes['delivery_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function payment()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
