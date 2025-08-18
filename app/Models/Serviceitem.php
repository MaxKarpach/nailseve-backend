<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    use HasFactory;

    protected $table = 'services_item';

    protected $fillable = [
        'text',
        'price',
        'serviceId',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'serviceId');
    }
}
