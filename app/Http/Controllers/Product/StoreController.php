<?php

namespace App\Http\Controllers\Product;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function  __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        dd($data);
        Product::firstOrCreate($data);

       return redirect()->route('product.index');
    }
}
