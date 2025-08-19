<?php

namespace App\Providers;

use App\Models\Service;

class ServiceService
{
    public function getAllServices()
    {
        return Service::all();
    }

    public function createService(array $data)
    {
        return Service::create($data);
    }

    public function getAllServicesWithItems()
    {
        return Service::with('items')->get();
    }
}