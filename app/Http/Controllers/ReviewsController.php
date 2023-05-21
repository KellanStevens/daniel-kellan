<?php

namespace App\Http\Controllers;

use App\Models\Dates;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function store(Request $request, $dateId)
    {
        $date = Dates::findOrFail($dateId);

        $review = new Reviews([
            'reviewer_name' => $request->input('reviewer_name'),
            'rating' => $request->input('rating'),
            'review' => $request->input('review'),
        ]);

        $date->reviews()->save($review);

        return redirect()->route('dates.show', $dateId)->with('success', 'Review added successfully.');
    }

    // Add other CRUD operations (update, delete) as needed
}
