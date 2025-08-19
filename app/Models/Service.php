<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;

    protected $table = 'services';

    protected $fillable = [
        'name',
    ];

    public function items()
    {
        return $this->hasMany(ServiceItem::class, 'service_id');
    }
}
