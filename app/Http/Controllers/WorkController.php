<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\WorkService;

class WorkController extends Controller
{
    private $workService;

     public function __construct(WorkService $workService)
    {
        $this->workService = $workService;
    }

    public function index()
    {
        return response()->json(
            $this->workService->getAllWorks()
        );
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'img' => 'required|string',
            'price' => 'required|integer',
        ]);

        

        $work = $this->workService->createWork($validated);
    
    }

    public function indexWithDescriptions()
    {
        return response()->json(
            $this->workService->getAllWorksWithDescriptions()
        );
    }

}