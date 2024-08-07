<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    public function index(){
        $chambres = Chambre::all();
        return view('chambre.index',compact('chambres'));
    }
    public function create(){
        return view("chambre.create");
    }
    public function ajoutChambre(Request $request){
        $request->validate([
            'numchambre' => "required|string|max:4",
            'typechambre' => "required|string|max:20",
            'prix'=> "required|numeric"
        ]);

        Chambre::create([
            'numchambre'=> $request->numchambre,
            'typechambre'=> $request->typechambre,
            'prix'=> $request->prix,
        ]);

        return redirect('chambres/create')->with('status','Chambre créer avec succée');
    }
    public function update(int $id){
        $chambre = Chambre::find($id);
        return view('chambre.update',compact('chambre'));
    }
    public function modifeClient(Request $request,int $id){
        $request->validate([
            'numchambre' => "required|string|max:4",
            'typechambre' => "required|string|max:20",
            'prix'=> "required|numeric"
        ]);

        Chambre::find($id)->update([
            'numchambre'=> $request->numchambre,
            'typechambre'=> $request->typechambre,
            'prix'=> $request->prix,
        ]);
        return redirect()->back()->with('status','Chambre modifier avec succée');
    }
    public function delete(int $id){
        $chambre = Chambre::find($id);
        $chambre->delete();

        return redirect()->back()->with('status','Chambre supprimer avec succée');
    }
}
