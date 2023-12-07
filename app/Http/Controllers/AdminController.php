<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Product\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Offre;


class AdminController extends Controller
{
   public function login(Request $request){

     /*  $email -> product_name = $request->product_name; */
   // return view('admin.login');
    return redirect('/modify');
   }
   public function saverproduit(Request $request){
      $produit= new ModelsProduct() ;
      $produit -> product_name = $request->product_name;
      $produit->product_price = $request->product_price;
      $produit->description = $request->product_description;
      $produit->save();
      Session::put('message', 'Le produit ' .$request->product_name.'  a été inséré avec succès ');

      return redirect('/create');
} 

   public function modify(){

   $offres = Offre::all(); 
   
    return view('offre.data-table')->with('offres', $offres);
   }

   public function jjj(){

  
    return view('admin.validation');
   }
   public function edit()
    {
      
        return view('admin.validation');
    }

    
}
