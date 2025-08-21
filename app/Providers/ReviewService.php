<?php

namespace App\Providers;

use App\Models\Review;

class ReviewService
{
    public function getAllReviews()
    {
      return Review::orderBy('id', 'desc')->get();
    }

    public function createReview(array $data)
    {
        return Review::create($data);
    }
}
