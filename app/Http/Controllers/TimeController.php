<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\TimeService;

class TimeController extends Controller
{
        private $timeService;

    public function __construct(TimeService $timeService)
    {
        $this->timeService = $timeService;
    }

    public function index()
    {
        return response()->json(
            $this->timeService->getAllTimes()
        );
    }

    public function getChosenTimes()
    {
        return response()->json(
            $this->timeService->getChosenTimes()
        );
    }

    public function chooseTime(int $id)
    {
        return response()->json(
            $this->timeService->chooseTime($id)
        );
    }

        public function store(Request $request)
    {

        $validated = $request->validate([
            'time' => 'required|string',
        ]);

        

        $review = $this->timeService->createTime($validated);
    
    }

}