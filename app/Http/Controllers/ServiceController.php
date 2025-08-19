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

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
        ]);

        

        $service = $this->serviceService->createService($validated);
    
    }

    public function indexWithItems()
    {
        return response()->json(
            $this->serviceService->getAllServicesWithItems()
        );
    }

}
