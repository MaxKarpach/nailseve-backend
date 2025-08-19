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

}