<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function AddData(Request $req){
        $formFields = $req->validate([
            'name' => ['required','min:3'],
            'price' => ['required','min:3'],
            'category' => 'required',
            'info' => '',
            'image' => 'required',
        ]);

            $formFields['image'] = $req->file('image')->store('images','public');

            Products::create($formFields);
            
            
            return back() ->with('message','product added successfully!');
    }
        public function GetProducts(){
            $products = Products::paginate(4);
            return view('pages.index', compact('products'));
        }

}
