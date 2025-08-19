<?php

namespace App\Providers;

use App\Models\WorkDescription;

class WorkDescriptionService
{
    public function getAllWorkDescriptions()
    {
        return WorkDescription::all();
    }
    public function createWorkDescription(array $data)
    {
        return WorkDescription::create($data);
    }
}