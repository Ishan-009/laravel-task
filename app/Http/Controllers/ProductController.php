<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{


    public function index()
    {
        return view("auth.login");
    }
    public function login(Request $request)
    {
        $user = User::all()->first();

        if($user->email==$request->email && $user->password == $request['password'])
        {
            redirect("/dashboard");
        }
        else {
            return redirect()->back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
    }

    public function home()
    {
        return view("auth.dashboard");
    }
}
