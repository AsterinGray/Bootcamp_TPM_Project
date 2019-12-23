<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = \App\Member::paginate(10);

        return view('index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_member = new \App\Member;
        $new_member->name = $request->get('name');
        $new_member->address = $request->get('address');
        $new_member->email = $request->get('email');
        $new_member->dob = $request->get('dob');
        $new_member->phone = $request->get('phone');
        $new_member->line = $request->get('line');
        $new_member->git = $request->get('git');

        if($request->file('ktp')){
            $file = $request -> file('ktp')->store('ktps', 'public');
            $new_member->ktp = $file;
        }
       
        if($request->file('cv')){
            $file = $request -> file('cv')->store('cvs', 'public');
            $new_member->cv = $file;
        }
        if($request->file('score')){
            $file = $request -> file('score')->store('scores', 'public');
            $new_member->score = $file;
        }

        $new_member->save();
        return redirect()->route('members.create')->with('status', 'Member successfully created');
 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
