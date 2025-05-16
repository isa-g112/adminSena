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

}
