<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index(){

        $areas = Area::all();

        return view('Area.index', compact('Areas'));

    }

    public function create() {

        return view('Area.create');

    }

    public function store(Request $request){

        $areas = new area();

        $areas->name=$request->name;

        $areas->save();

        return $areas;

    }

}
