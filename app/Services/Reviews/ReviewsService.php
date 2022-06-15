<?php

namespace App\Services\Reviews;

use App\Models\Reviews\Review;

class ReviewsService
{
    public Review $reviewModel;

    public function __construct(Review $reviewModel)
    {
        $this->reviewModel = $reviewModel;
    }
}
