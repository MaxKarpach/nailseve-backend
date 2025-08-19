<?php

namespace App\Providers;

use App\Models\Work;

class WorkService
{
    public function getAllWorks()
    {
        return Work::all();
    }

    

}