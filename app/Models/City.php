<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'cities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title_en',
        'title_ar',
        'state_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function cityDeliveries()
    {
        return $this->hasMany(Delivery::class, 'city_id', 'id');
    }

    public function cityAddresses()
    {
        return $this->hasMany(Address::class, 'city_id', 'id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
