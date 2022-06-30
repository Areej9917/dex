<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwbDeliveryStatus extends Model
{
    use HasFactory;


    protected $table = 'awb_delivery_statuses';

    protected $fillable = [
        'awb_id',
        'delivery_status_id',
        'service_area_id',
        'latitude',
        'longitude',
        'geolocation',
        'date_time'
    ];
    public function deliveryStatus(){
        return $this->belongsTo('App\Models\DeliveryStatus','delivery_status_id');
    }

    public function serviceArea(){
        return $this->belongsTo('App\Models\ServiceArea','service_area_id');
    }
}
