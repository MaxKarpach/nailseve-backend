<?php

namespace App\Providers;

use App\Models\ServiceItem;

class ServiceItemService
{
    public function getAllServiceItems()
    {
        return ServiceItem::all();
    }
}