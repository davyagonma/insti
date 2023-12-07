<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product\Models\Product;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    
    public function login(){
        return view('admin.login');
    }
    public function home (){
        return View('pages.home');
    }

    public function about (){
        return View('pages.about');
    }

    // public function home (){
        
    //     $produit = produit:: inRandomOrder()->paginate(5); 

    //     return View('pages.home')->with('produit', $produit);
    // }

    public function service (){
        
        $produit = DB::table('products')
        ->inRandomOrder()->paginate(5); 

        return View('pages.service')->with('produit', $produit);
    }
    public function show($id){
    
        $produit= ModelsProduct:: find ($id);


        return view('pages.show')->with('produit',$produit);


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
    public function create (){

        return view('pages.create');

    }
}
