<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    public $timestamps = false;

    protected $table = 'services_item';

    protected $fillable = [
        'service_id',
        'text',
        'price'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
