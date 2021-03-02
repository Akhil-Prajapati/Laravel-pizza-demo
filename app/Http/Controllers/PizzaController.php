<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        $pizzas = Pizza::all();
        return view('Pizzas.list',['pizzas' => $pizzas ]);
    }
    
    public function show(Request $request, $name){
        $pizzas = Pizza::where("name", $name)->get()->first();
        // dd($pizzas);
        return view('Pizzas.order',['pizzas' => $pizzas,'name' => $name ]);
    }

    public function pizza(){
        return view('Pizzas.pizza');
    }
}
