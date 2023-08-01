<?php

namespace App\Http\Controllers\Category;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function  __invoke(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index');
    }
}

