<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    
    public function index(){
        $groups = Group::all();


        return view('group.index', ['groups' => $groups]);
    }


    public function show($id){

        $group= Group::find($id);
        return view('group.show', compact('group'));
        
    }

    public function create(Request $request){
        
        return view('group.create');

    }

    public function store(){
        
    }
}

