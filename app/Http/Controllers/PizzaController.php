<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pizzas;
class PizzaController extends Controller
{
    //
    
    // show all recorde in database 
    public function index()
    {
        return view('pizzas.index');
    }
     
    //show single recorde
    public function show($id)
    {
        $pizza = pizzas::findorfail($id);
        return view('pizzas.show', ['pizza'=>$pizza]);
    }
      
    // add form in html 
    public function create()
    {
        return view('pizzas.create');
    }

     // add recorde to database 
    public function store()
    {
         // geting recorde in create form
        //  error_log(request('name'));
        //  error_log(request('type'));
        //  error_log(request('price'));
        //  error_log(request('location'));

         $pizza = new pizzas();

         $pizza->name = request('name');
         $pizza->type = request('type');
         $pizza->price = request('price');
         $pizza->location = request('location');
          
         // insert methode 
         $pizza->save();
          
         //redirect after submiting data to database
        return redirect('/')->with('mssg','Thank you for ordering');
    }

    public function destroy($id)
    {
          $pizza = pizzas::findorfail($id);
          $pizza->delete();
          return redirect('/')->with('mssg','Ordered Deleted');
    }


    public function list()
    {
        $pizza = pizzas::all();

        return view('pizzas.allpizza' ,
        [
            'pizza'=>$pizza,
        ]
    
     );
        
    }

    public function edit($id)
    {
        $pizza = pizzas::findorfail($id);
        return view('pizzas.epizza', 
        [
           'pizza'=>$pizza,
        ]);
    }

    public function update($id)
    {
        $pizza = pizzas::findorfail($id);

        $pizza->name = request('name');
         $pizza->type = request('type');
         $pizza->price = request('price');
         $pizza->location = request('location');
          
         // insert methode 
         $pizza->save();
          
         //redirect after submiting data to database
        return redirect('/allpizza')->with('mssg','Data Updated');

    }
}

// Uinsharp for textarea