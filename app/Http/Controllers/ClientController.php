<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('clients.index',compact('clients'));
    }

    public function create(){
        return view('clients.create');
    }

    public function ajoutClient(Request $request){
        $request->merge(['cin' => trim($request->cin)]);

        $request->validate([
            'nom'=> 'required|string|max:255',
            'prenom'=> 'required|string|max:255',
            'adresse'=> 'required|string|max:255',
            'cin'=> 'required|numeric',
            'email'=> 'required|string|max:255',
            'phone'=> 'required|numeric|digits_between:1,15'

        ]);

        Client::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'adresse'=>$request->adresse,
            'cin'=>$request->cin,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);

        return redirect('clients/create')->with('status','Client créer avec succée');
    }

    public function update(int $id){
        $client = Client::find($id);
        return view('clients.update' , compact('client'));
    }

    public function modifeClient(Request $request,int $id){
        $request->merge(['cin' => trim($request->cin)]);

        $request->validate([
            'nom'=> 'required|string|max:255',
            'prenom'=> 'required|string|max:255',
            'adresse'=> 'required|string|max:255',
            'cin'=> 'required|numeric',
            'email'=> 'required|string|max:255',
            'phone'=> 'required|numeric|digits_between:1,15'

        ]);

        Client::find($id)->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'adresse'=>$request->adresse,
            'cin'=>$request->cin,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);
        return redirect()->back()->with('status','Client modifier avec succée');
    }

    public function delete(int $id){
        $client = Client::find($id);

        $client->delete();
        
        return redirect()->back()->with('status','Client Supprimer avec succée');
    }
}
