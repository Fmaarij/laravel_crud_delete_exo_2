<?php

namespace App\Http\Controllers;

use App\Models\VoitureModel;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function ShowForm(){
        $dbVoiture = VoitureModel::all();
        return view('frontend.pages.form',compact('dbVoiture'));
    }
    public function AddCar(Request $request){
        $addCar= new VoitureModel;
        $addCar->marque = $request->marque;
        $addCar->annee = $request->annee;
        $addCar->couleur = $request->couleur;
        $addCar->prix = $request->prix;
        $addCar->reduction = $request->reduction;
        $addCar->save();
        return redirect()->back();
    }
}
