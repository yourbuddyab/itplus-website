<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Product;
use App\Team;
use App\Slider;
class LoginController extends Controller
{
    public function index()
    {
    return view('backend.index');
    }
    public function login(Request $request){
        $email= $request->email;
        $password= $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            $fetchcat = Category::count();
            $fetchpro = Product::count();
            $fetchteam =Team::count();
            $fetchsli = Slider::count();
            return view('backend.home',compact('fetchcat','fetchpro','fetchteam','fetchsli'));
        }
        else{
           return redirect()->back()->withErrors(['message'=> 'Invalid login name or password']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/backend');
    }
}
