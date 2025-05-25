<?php

namespace App\Http\Controllers;

use App\Models\Apprendice;
use Illuminate\Http\Request;
use App\Models\areamodel;

class AreaController extends Controller
{

 public function show($id)
    {
        $Apprendice = Apprendice::find($id);

        return view('category.show', compact('Apprendice'));
    }

     //Destroy
     public function destroy (Apprendice $Apprendice){

        $Apprendice->delete();

        return redirect()->route('category.index');
    }

      public function edit(Apprendice $Apprendice){

        return view('category.edit',compact('Apprendice'));

      }

     //Update
    public function update(Request $request, Apprendice $Apprendice){

        $Apprendice->name = $request->name;
        $Apprendice->save();

        return redirect()->route('category.index');

      }

}
