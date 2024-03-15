<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(){

        $people = Person::all();

        return view('person.index')->with('people', $people);

    }

    public function show($id){

        $person = Person::find($id);

        return  view('person.show',compact('person'));

    }

    public function create()
    {
        return  view('person.create');
    }

    public function save(Request $request){

    }

    public function edit($id){

        return  view('person.edit');
    }

    public function update(Request $request, $id){

    }

   
}
