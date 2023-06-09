<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Http\Request;
use App\Http\Requests\PrestationRequest;

class PrestationController extends Controller
{
    //
    public function create(){
        return view('prestation');
    }

    public function store(PrestationRequest $request){

        $prestation = Prestation::create($request->all());

        return view('prestation');


    }

}
