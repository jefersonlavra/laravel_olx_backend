<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategoriesController extends Controller
{
    public function index(Request $r): JsonResponse
    {
        $categories = Category::all();
        return response()->json(['data' => $categories]);
    }
}
