<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderByDesc('id');

        return view('user.index', [
            'users' => $user->paginate(20)
        ]);
    }

    public function create(Request $request)
    {
        return view('user.create');
    }

    public function store(UserRequest $request)
    {
        try {
            User::create($request->all());
            return redirect()->route('user.index');
        } catch (\Exception $exception) {
            return redirect()->back()->withInput();
        }
    }
}
