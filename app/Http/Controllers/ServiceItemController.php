<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ServiceItemService;

class ServiceItemController extends Controller
{
    private $serviceItemService;

    public function __construct(ServiceItemService $serviceItemService)
    {
        $this->serviceItemService = $serviceItemService;
    }

    public function index()
    {
        return response()->json(
            $this->serviceItemService->getAllServiceItems()
        );
    }

}