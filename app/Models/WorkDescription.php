<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkDescription extends Model
{
    use HasFactory;

    protected $table = 'works_description';

    protected $fillable = [
        'work_id',
        'text',
    ];

    public function work()
    {
        return $this->belongsTo(Work::class, 'work_id');
    }
}
