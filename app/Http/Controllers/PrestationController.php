<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\PrestationRequest;
use App\Models\Categorie;

class PrestationController extends Controller
{

    public function index(){
        $prestationsmain = Prestation::where('type_id', '1')->get();
        $prestationspied = Prestation::where('type_id', '2')->get();

        return view('administration.prestation.index', compact('prestationsmain','prestationspied'));
    }

    //
    public function create(){
        $categories = Categorie::all();
        $types = Type::all();
        return view('administration.prestation.create', compact('categories', 'types'));
    }

    public function store(PrestationRequest $request){

        $prestation = Prestation::create($request->all());

        return redirect()->route('admin.prestation.index');


    }

    public function edit($id){
        $prestation = Prestation::findOrFail($id);
        $categories = Categorie::all();
        $types = Type::all();
        return view('administration.prestation.edit', compact('prestation','categories', 'types'));
    }

    public function update(PrestationRequest $request, $id)
    {
        try {
            $prestation = Prestation::findOrFail($id);
            $prestation->nom = $request->nom;
            $prestation->description = $request->description;
            $prestation->prix = $request->prix;
            $prestation->categorie_id = $request->categorie_id;
            $prestation->save();


        } catch (\Throwable $th) {
            return redirect()->route('admin.prestation.index')->with('error', 'Une erreur est survenue lors de la mise à jour de la prestation');
        }


        $prestation->update($request->all());

        return redirect()->route('admin.prestation.index')->with('success', 'La prestation a été mise à jour avec succès');


    }

    public function destroy($id)
    {
        try {
            $directeur = Prestation::findOrFail($id);
            $directeur->forceDelete();
            return redirect()->route('admin.prestation.index')->with('success', 'La prestation a été supprimée avec succès');

        } catch (ModelNotFoundException $e) {
            error_log($e->getMessage());
            abort(404);
        }


    }

}
