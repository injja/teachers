<?php

namespace App\Http\Controllers\Reviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Reviews\ReviewService;

class ReviewController extends Controller
{
    public reviewService $reviewService;

    public function __construct(reviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }


    public function create(Request $request, $teacher_id)
    {
        $review = $request->all();

        $this->reviewService->create($review);


        return redirect()->route('teachers.show', ['id' => $teacher_id]);
    }
}
