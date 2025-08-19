<?php

namespace App\Providers;

use App\Models\Work;

class WorkService
{
    public function getAllWorks()
    {
        return Work::all();
    }

    public function createWork(array $data)
    {
        return Work::create($data);
    }

    public function getAllWorksWithDescriptions()
    {
        return Work::with('descriptions')->get();
    }

}