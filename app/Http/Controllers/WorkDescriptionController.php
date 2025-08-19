<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\WorkDescriptionService;

class WorkDescriptionController extends Controller
{
    private $workDesciptionService;

     public function __construct(WorkDescriptionService $workDesciptionService)
    {
        $this->workDesciptionService = $workDesciptionService;
    }

    public function index()
    {
        return response()->json(
            $this->workDesciptionService->getAllWorkDescriptions()
        );
    }

}