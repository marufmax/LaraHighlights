<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        return Category::create([
           'name'   => $request->name,
           'icon'   => $request->icon
        ]);
    }
}
