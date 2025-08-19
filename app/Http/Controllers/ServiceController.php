<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ServiceService;

class ServiceController extends Controller
{
    private $serviceService;

         public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    public function index()
    {
        return response()->json(
            $this->serviceService->getAllServices()
        );
    }

}
