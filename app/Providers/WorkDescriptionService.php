<?php

namespace App\Providers;

use App\Models\WorkDescription;

class WorkDescriptionService
{
    public function getAllWorkDescriptions()
    {
        return WorkDescription::all();
    }
}