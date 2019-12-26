<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        return view('group', compact('groups'));
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
        $new_group = new \App\Group;
        $new_group->name = $request->get('name');
        $new_group->address = $request->get('address');
        $new_group->email = $request->get('email');
        $new_group->dob = $request->get('dob');
        $new_group->phone = $request->get('phone');
        $new_group->line = $request->get('line');
        $new_group->git = $request->get('git');
        if($request->file('ktp')){
            $file = $request -> file('ktp')->store('ktps', 'public');
            $new_group->ktp = $file;
        }
       
        if($request->file('cv')){
            $file = $request -> file('cv')->store('cvs', 'public');
            $new_group->cv = $file;
        }
        if($request->file('score')){
            $file = $request -> file('score')->store('scores', 'public');
            $new_group->score = $file;
        }
       
        $new_group->name1 = $request->get('name1');
        $new_group->address1 = $request->get('address1');
        $new_group->email1 = $request->get('email1');
        $new_group->dob1 = $request->get('dob1');
        $new_group->phone1 = $request->get('phone1');
        $new_group->line1 = $request->get('line1');
        $new_group->git1 = $request->get('git1');
        if($request->file('ktp1')){
            $file = $request -> file('ktp1')->store('ktps', 'public');
            $new_group->ktp1 = $file;
        }
       
        if($request->file('cv1')){
            $file = $request -> file('cv1')->store('cvs', 'public');
            $new_group->cv1 = $file;
        }
        if($request->file('score1')){
            $file = $request -> file('score1')->store('scores', 'public');
            $new_group->score1 = $file;
        }
        $new_group->name2 = $request->get('name2');
        $new_group->address2 = $request->get('address2');
        $new_group->email2 = $request->get('email2');
        $new_group->dob2 = $request->get('dob2');
        $new_group->phone2 = $request->get('phone2');
        $new_group->line2 = $request->get('line2');
        $new_group->git2 = $request->get('git2');
        if($request->file('ktp2')){
            $file = $request -> file('ktp2')->store('ktps', 'public');
            $new_group->ktp2 = $file;
        }
       
        if($request->file('cv2')){
            $file = $request -> file('cv2')->store('cvs', 'public');
            $new_group->cv2 = $file;
        }
        if($request->file('score2')){
            $file = $request -> file('score2')->store('scores', 'public');
            $new_group->score2 = $file;
        }

        $new_group->save();
        return redirect()->route('groups.create')->with('status', 'group successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
