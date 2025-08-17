<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ReviewService;

class ReviewController extends Controller
{
        private $reviewService;

    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    public function index()
    {
        return response()->json(
            $this->reviewService->getAllReviews()
        );
    }

public function store(Request $request)
{

        $validated = $request->validate([
            'mark' => 'required|integer|min:1|max:5',
            'name' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        

        $review = $this->reviewService->createReview($validated);
    
}
}
