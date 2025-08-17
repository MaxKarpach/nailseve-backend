<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\DateService;

class DateController extends Controller
{
        private $dateService;

    public function __construct(DateService $dateService)
    {
        $this->dateService = $dateService;
    }

    public function index()
    {
        return response()->json(
            $this->dateService->getAllDates()
        );
    }

    public function getChosenDates()
    {
        return response()->json(
            $this->dateService->getChosenDates()
        );
    }

    public function chooseDate(int $id)
    {
        return response()->json(
            $this->dateService->chooseDate($id)
        );
    }

}