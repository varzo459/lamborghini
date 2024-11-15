<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        $req = $request->validated();
        $user = User::create($req);
        if($user) {
            Auth::Login($user);
            return redirect()->route('login');
        } else {
            abort(400);
        }
    }
}
