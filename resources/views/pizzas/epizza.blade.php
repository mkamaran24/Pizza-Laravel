@extends('layouts/app')
        
        @section('content')
        
        <div class="container">
        <br>
        <br>
         <h1 class="text-center">Order Pizza</h1>
        <form action="{{action('PizzaController@update', $pizza->id) }}" method="post">
           @csrf
          
        

          <div class="form-droup">
         <label for="name">Name</label>
         <input type="text" class="form-control" name="name" id="name" value="{{$pizza->name}}">
         </div>

          <div class="form-group">
         <label for="type">Pizza Type</label>
           <select name="type" class="form-control" id="type" value="{{$pizza->type}}">
           
           <option value="xaw">xaw</option>
           <option value="sada">sada</option>
           <option value="bagosht">bagosht</option>
           
           </select>
           </div>

           <div class="form-group">
           <label for="price">Price</label>
           <input type="text" class="form-control" name="price" id="price" value="{{$pizza->price}}">
           </div>

           <div class="form-group">
           <label for="location">Location</label>
           <select name="location" class="form-control" id="location" value="{{$pizza->location}}">
           
           <option value="erbil">erbil</option>
           <option value="suly">suly</option>
           <option value="duhok">duhok</option>
           
           </select>
           </div>

           <input type="submit" value="Update" class="btn btn-primary">
           
        </form>

        <p>{{session('mssg')}}</p>
        
        </div>

       @endsection