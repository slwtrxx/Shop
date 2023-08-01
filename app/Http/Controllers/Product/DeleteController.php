<?php

namespace App\Http\Controllers\Product;
use App\Models\Color;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function  __invoke(Color $color)
    {
        $color->delete();

        return redirect()->route('color.index');
    }
}

