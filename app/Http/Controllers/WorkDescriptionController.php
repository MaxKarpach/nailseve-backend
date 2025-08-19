<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\WorkDescriptionService;

class WorkDescriptionController extends Controller
{
    private $workDescriptionService;

     public function __construct(WorkDescriptionService $workDesciptionService)
    {
        $this->workDescriptionService = $workDesciptionService;
    }

    public function index()
    {
        return response()->json(
            $this->workDescriptionService->getAllWorkDescriptions()
        );
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'work_id' => 'required|integer',
            'text' => 'required|string',
        ]);

        

        $workDescriprion = $this->workDescriptionService->createWorkDescription($validated);
    
    }

}