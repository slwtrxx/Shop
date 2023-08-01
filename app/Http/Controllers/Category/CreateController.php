<?php

namespace App\Http\Controllers\Category;
use App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
   {
    return view('category.create');
   }
}
