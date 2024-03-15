<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(){

        $people = Person::all();

        return view('person');

    }
}
