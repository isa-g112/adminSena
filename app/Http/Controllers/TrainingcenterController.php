<?php

namespace App\Http\Controllers;

use App\Models\Trainingcenter;
use Illuminate\Http\Request;

class TrainingcenterController extends Controller
{
    public function index(){

        $trainingcenters = Trainingcenter::all();

        return view('Trainingcenter.index', compact('trainingcenters'));

    }

    public function create() {

        return view('Trainingcenter.create');

    }

    public function store(Request $request){

        $trainingcenters = new Trainingcenter();

        $trainingcenters->name=$request->name;

        $trainingcenters->location=$request->location;

        $trainingcenters->save();

        return $trainingcenters;

    }



    public function show($id)
    {
        $trainingcenter = Trainingcenter::find($id);

        return view('Trainingcenter.show', compact('trainingcenter'));
    }

     //Destroy
     public function destroy (Trainingcenter $trainingcenter){

        $trainingcenter->delete();

        return redirect()->route('Trainingcenter.index');
    }

      public function edit(Trainingcenter $trainingcenter){

        return view('Trainingcenter.edit',compact('trainingcenter'));

      }

     //Update
    public function update(Request $request, Trainingcenter $trainingcenter){

        $trainingcenter->name = $request->name;
        $trainingcenter->save();

        return redirect()->route('Trainingcenter.index');

      }



}
