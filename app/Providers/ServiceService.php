<?php

namespace App\Providers;

use App\Models\Service;

class ServiceService
{
    public function getAllServices()
    {
        return Service::all();
    }
}