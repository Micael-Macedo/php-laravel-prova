<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $cap = random_int(10, 50);
        return view('login')->with(['cap' => $cap]);
    }

    public function cadastro(Request $request)
    {
        return view('register');
    }

    public function check(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        if ($data['cap'] === $data['userCap']) {
            unset($data['cap']);
            unset($data['userCap']);
            if (Auth::attempt($data)) {
                $user = Auth::user();
                $user->last_login_date = date("Y-m-d H:i:s");
                $data = array($data);
                $user->update($data);
                return view('index');
            }else{
                return view('index');
            }
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['last_login_date'] = date("Y-m-d H:i:s");
        User::create($data);
        if (Auth::attempt($request->all())) {
            $user = Auth::user();
            $user->last_login_date = date("Y-m-d H:i:s");
            $user->update($user);
        }
    }
}
