<?php

namespace App\Services\Reviews;

use App\Models\Reviews\Review;
use Illuminate\Support\Facades\DB;

class ReviewService
{
    public Review $reviewModel;

    public function __construct(Review $reviewModel)
    {
        $this->reviewModel = $reviewModel;
    }

    public function create($review)
    {
        $this->reviewModel::create($review);
    }
}
