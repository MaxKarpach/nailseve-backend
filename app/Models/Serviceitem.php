<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    public $timestamps = false;

    protected $table = 'service_items';

    protected $fillable = [
        'service_id',
        'text',
        'price'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

public function records()
{
    return $this->belongsToMany(Record::class, 'record_service_items', 'service_item_id', 'record_id');
}

}
