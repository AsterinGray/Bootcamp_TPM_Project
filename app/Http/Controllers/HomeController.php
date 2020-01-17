<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $useremail = $user->email;

        if ($useremail == "eeo@bncc.net"){

            $datausers = User::all();

            return view('admindb', compact('datausers'));
        }
        else{

        return view('home');

        }
    }

    public function edit()
    {
        $users = Auth::user();
        return view('edit', compact('users'));
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return redirect('/home');
    }


}
