<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class OffreController extends Controller
{
    //
    // OffreController.php
    public function show($id)
    {
        $offre = Offre::find($id);
        return view('offre.show', compact('offre'));
    }

    public function edit($id)
    {
        $offre = Offre::find($id);
        return view('offre.validation', compact('offre'));
    }


    public function jjj(){

        
        return view('admin.validation');
       }

    public function destroy($id)
    {
        $offre = Offre::find($id);
        return view('offre.show', compact('offre'));
    }

    public function validateOffer(Request $request, $id)
    {
       
        $request->validate([
            'champ1' => 'required',
            'champ2' => 'numeric',
            // Ajoutez les règles de validation nécessaires pour vos champs
        ]);

        $offre = Offre::find($id);
        $offre->champ1 = $request->input('champ1');
        $offre->champ2 = $request->input('champ2');
        

        $offre->save();

        /* return redirect()->route('nom_de_la_route_de_redirection'); */
        return view('offre.show', compact('offre'));
    }

    public function showValidationForm($id)
    {
        $offre = Offre::find($id);
        return view('validation', compact('offre'));
    }

}
