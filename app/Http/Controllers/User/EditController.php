<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function  __invoke(User $user)
    {
        return view('user.edit', compact('user'));
    }
}
