<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class StatesController extends Controller
{
    public function index(Request $r): JsonResponse
    {
        $states = State::all();
        return response()->json(['data' => $states]);
    }
}
