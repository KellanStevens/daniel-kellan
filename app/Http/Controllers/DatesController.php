<?php

namespace App\Http\Controllers;

use App\Models\Dates;
use Illuminate\Http\Request;

class DatesController extends Controller
{
    public function index()
    {
        $dates = Dates::all();
        return view('dates.index', compact('dates'));
    }

    public function show($dateId)
    {
        $date = Dates::findOrFail($dateId);
        $reviews = $date->reviews;
        return view('dates.show', compact('date', 'reviews'));
    }

    // Add other CRUD operations (create, update, delete) as needed
}
