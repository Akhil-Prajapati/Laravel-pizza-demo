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

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $temp = json_encode(request('extra'));
        $pizza = new Pizza();

        $pizza->name = request('pizza');
        $pizza->price = request('price');
        $pizza->extra = $temp;
        $pizza->size = request('size');

        $pizza->save();

        error_log($pizza);

        return redirect('/list')->with('massage' , '✔  Thanks for creating');
    }

    public function destroy($id){
        $pizza = Pizza::find($id);
        $pizza->delete();

        return redirect('/list')->with('massage' , '🚫 Thanks for creating');

    }
}
