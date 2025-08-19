<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public $timestamps = false;

    protected $table = 'works';

    protected $fillable = [
        'img',
        'price',
    ];

    public function descriptions()
    {
        return $this->hasMany(WorkDescription::class, 'work_id');
    }
}
