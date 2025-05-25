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

    public function show($id)
    {
        $computer = Computer::find($id);

        return view('computer.show', compact('computer'));
    }

     //Destroy
     public function destroy (Computer $computer){

        $computer->delete();

        return redirect()->route('computer.index');
    }

      public function edit(Computer $computer){

        return view('computer.edit',compact('computer'));

      }

     //Update
    public function update(Request $request, Computer $computer){

        $computer->name = $request->name;
        $computer->save();

        return redirect()->route('computer.index');

      }

}
