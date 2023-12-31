<?php

namespace App\Http\Controllers\Category;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function  __invoke(Category $category)
    {
        return view('category.edit', compact('category'));
    }
}
