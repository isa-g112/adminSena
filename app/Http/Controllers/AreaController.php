<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index(){

        $areas = Area::all();

        return view('Area.index', compact('areas'));

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

      public function show($id)
    {
        $Area = Area::find($id);

        return view('Area.show', compact('Area'));
    }

      //Destroy
     public function destroy (Area $Area){

        $Area->delete();

        return redirect()->route('Area.index');
    }

      public function edit(Area $Area){

        return view('Area.edit',compact('Area'));

      }

     //Update
    public function update(Request $request, Area $Area){

        $Area->name = $request->name;
        $Area->save();

        return redirect()->route('Area.index');

      }


}
