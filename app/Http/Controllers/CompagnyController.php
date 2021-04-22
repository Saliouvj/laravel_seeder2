<?php

namespace App\Http\Controllers;

use App\Models\Compagny;
use Illuminate\Http\Request;

class CompagnyController extends Controller
{
    
   
  
    public function store(Request $request)
    {
        $store = new Compagny;
        $store->nom_compagny = $request->nom_compagny;
        $store->adress_compagny = $request->adress_compagny;
        $store->phone= $request->phone;
        $store->mail=$request->mail;
        $store->firstname_user=$request->firstname_user;
        $store->name_user=$request->name_user;
        $store->image=$request->image;
        $store->save();
        return redirect()->back();
    }

   
    public function show($id)
    {
        $show=Compagny::find($id);
        return view('show',compact('show'));
    }

    
    public function edit($id)
    {
        $edit=Compagny::find($id);
        return view('edit', compact('edit'));
    }

   
    public function update(Request $request, $id)
    {
        $update=Compagny::find($id);
        $update->nom_compagny = $request->nom_compagny;
        $update->adress_compagny = $request->adress_compagny;
        $update->phone= $request->phone;
        $update->mail=$request->mail;
        $update->firstname_user=$request->firstname_user;
        $update->name_user=$request->name_user;
        $update->image=$request->image;
    }


    public function destroy($id)
    {
        $destroy=Compagny::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
