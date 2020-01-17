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

    public function update(Request $request, User $user)
    {

        $data = $request->all();

        if(request()->hasFile('score')){
            $score = request()->file('score')->getClientOriginalName();
            request()->file('score')->storeAs('scores', $user->id.'/'.$score, '');
            $user->update(['score'=>$score]);
        }
        if(request()->hasFile('ktp')){
            $ktp = request()->file('ktp')->getClientOriginalName();
            request()->file('ktp')->storeAs('ktps', $user->id.'/'.$ktp, '');
            $user->update(['ktp'=>$ktp]);
        }
        if(request()->hasFile('cv')){
            $cv = request()->file('cv')->getClientOriginalName();
            request()->file('cv')->storeAs('cvs', $user->id.'/'.$cv, '');
            $user->update(['cv'=>$cv]);
        }
        if(request()->hasFile('score1')){
            $score1 = request()->file('score1')->getClientOriginalName();
            request()->file('score1')->storeAs('scores', $user->id.'/'.$score1, '');
            $user->update(['score1'=>$score1]);
        }
        if(request()->hasFile('ktp1')){
            $ktp1 = request()->file('ktp1')->getClientOriginalName();
            request()->file('ktp1')->storeAs('ktps', $user->id.'/'.$ktp1, '');
            $user->update(['ktp1'=>$ktp1]);
        }
        if(request()->hasFile('cv1')){
            $cv1 = request()->file('cv1')->getClientOriginalName();
            request()->file('cv1')->storeAs('cvs', $user->id.'/'.$cv1, '');
            $user->update(['cv1'=>$cv1]);
        }
        if(request()->hasFile('score2')){
            $score2 = request()->file('score2')->getClientOriginalName();
            request()->file('score2')->storeAs('scores', $user->id.'/'.$score2, '');
            $user->update(['score2'=>$score2]);
        }
        if(request()->hasFile('ktp2')){
            $ktp2 = request()->file('ktp2')->getClientOriginalName();
            request()->file('ktp2')->storeAs('ktps', $user->id.'/'.$ktp2, '');
            $user->update(['ktp2'=>$ktp2]);
        }
        if(request()->hasFile('cv2')){
            $cv2 = request()->file('cv2')->getClientOriginalName();
            request()->file('cv2')->storeAs('cvs', $user->id.'/'.$cv2, '');
            $user->update(['cv2'=>$cv2]);
        }
        //  return $user;
        

        $user->update($data);

        return redirect('/home');

    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return redirect('/home');
    }


}
