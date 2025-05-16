<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index(){

        $computers = Computer::all();

        return view('Computer.index', compact('computers'));

    }

    public function create() {

        return view('Computer.create');

    }

    public function store(Request $request){

        $computers = new Computer();

        $computers->number=$request->number;
        $computers->brand=$request->brand;

        $computers->save();

        return $computers;

    }
}
