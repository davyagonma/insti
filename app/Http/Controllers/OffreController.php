<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\DetailOffre;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class OffreController extends Controller
{
     
    public function modify(){
        $offres = Offre::all(); 
        
         return view('offre.data-table')->with('offres', $offres);
    }

    public function show($data_cat){

        $detailsoffre = DetailOffre::where('data_cat', $data_cat)
        ->get();
        if (!$detailsoffre) {
            // Gérer le cas où aucune offre n'a été trouvée, par exemple, rediriger ou afficher un message d'erreur
            return redirect()->route('/modify')->with('error', 'Aucune offre trouvée.');
        } 
        
         return view('offre.show')->with('detailsoffre', $detailsoffre);
    }

    public function edit($id)
    {
        $offre = Offre::find($id);

        if (!$offre) {
            // Gérez le cas où l'offre n'est pas trouvée, par exemple, redirigez ou renvoyez une erreur.
            return redirect()->route('/');
        }

        return view('offre.edit', compact('offre'))->with('offre', $offre);
    }

    public function destroy($id)
    {
        $offre = Offre::find($id);

        if ($offre) {
            // Supprimez l'offre de la base de données
            $offre->delete();
        }

        // Recherchez toutes les offres après la suppression
        $offres = Offre::all();

        // Redirigez l'utilisateur vers une page appropriée avec les offres mises à jour
        return view('offre.data-table')->with('offres', $offres);
    }

    public function destroydetails($id){
        $offre = DetailOffre::find($id);

        if ($offre) {
            // Supprimez l'offre de la base de données
            $offre->delete();
        }

        // Recherchez toutes les offres après la suppression
        $offres = Offre::all();

        // Redirigez l'utilisateur vers une page appropriée avec les offres mises à jour
        return view('offre.data-table')->with('offres', $offres);
    }

    public function editdetails($id)
    {
        $offre = DetailOffre::find($id);

        if (!$offre) {
            // Gérez le cas où l'offre n'est pas trouvée, par exemple, redirigez ou renvoyez une erreur.
            return redirect()->route('/');
        }

        return view('offre.detailedit', compact('offre'))->with('offre', $offre);
    }

    public function validerOffre(Request $request,$id){
        $offre= Offre::find($id) ;
        $offre->data_type = $request->data_type;
        $offre->data_cat = $request->data_cat;
        $offre->cat_name = $request->cat_name;
        $offre->cat_desc = $request->cat_desc;
        $offre->save();
        Session::put('message', 'Le produit ' .$request->data_cat.'  a été modifié avec succès ');

        return redirect('/');
  } 
    public function validerDetailOffre(Request $request,$id){
        $offre= DetailOffre::find($id) ;
        $offre->data_cat = $request->data_cat;
        $offre->nom = $request->nom;
        $offre->options = $request->options;
        $offre->admission = $request->admission;
        $offre->ProfilsSortie = $request->ProfilsSortie;
        
        $offre->save();
        Session::put('message', 'Le produit ' .$request->data_cat.'  a été modifié avec succès ');

        return redirect('/');
  } 
   
    public function ajouterDetailOffre(){
        
    }
}
