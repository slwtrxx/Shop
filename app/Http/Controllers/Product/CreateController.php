<?php

namespace App\Http\Controllers\Product;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
   {
    $tags = Tag::all();
    $colors = Color::all();
    $categories = Category::all();
    return view('product.create', compact('tags', 'colors', 'categories'));
   }
}
