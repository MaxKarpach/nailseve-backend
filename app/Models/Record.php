<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $timestamps = false;

    protected $table = 'records';

    protected $fillable = [
        'date',
        'time'
    ];

public function items()
{
    return $this->belongsToMany(ServiceItem::class, 'record_service_items', 'record_id', 'service_item_id');
}

}
