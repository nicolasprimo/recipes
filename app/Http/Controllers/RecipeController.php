<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
class RecipeController extends Controller
{
    public function index(){
      $datas = Recipe::all();
      return view('recipes',compact('datas'));
    }

    public function show($id){      
      $data = Recipe::find($id);
      return view('recipe-show',compact('data'));
    }
    
    public function create(){
      return view('recipe-create');
    }

    public function edit($id){
      $data = Recipe::find($id);
      return view('recipe-edit',compact('data'));
    }

    public function update(Request $request,$id){  
      $validated = $request->validate([
        'nomDeLaRecette' => 'required',
        'nb_perso' => 'required',
      ]);
      $table = Recipe::find($id);
      $table->name = $request->nomDeLaRecette;
      $table->nbr_personnes = $request->nb_perso;
      $table->save();
      return redirect()->back();
    }

    public function store(Request $request){  
      $validated = $request->validate([
        'nomDeLaRecette' => 'required',
        'nb_perso' => 'required',
      ]);
      $table = new Recipe;
      $table->name = $request->nomDeLaRecette;
      $table->nbr_personnes = $request->nb_perso;
      $table->save();
      return redirect('/recettes');
    }
    
    public function destroy($id){
      $recette = Recipe::find($id);
      $recette->delete();
      return redirect()->back();
    }
    
}
