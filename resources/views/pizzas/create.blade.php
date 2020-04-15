@extends('layouts/app')
        
        @section('content')
        
        <div class="container">
        <br>
        <br>
         <h1 class="text-center">Order Pizza</h1>
        <form action="/pizza" method="post">
           @csrf
          
          <div class="form-droup">
         <label for="name">Name</label>
         <input type="text" class="form-control" name="name" id="name">
         </div>

          <div class="form-group">
         <label for="type">Pizza Type</label>
           <select name="type" class="form-control" id="type" >
           
           <option value="xaw">xaw</option>
           <option value="sada">sada</option>
           <option value="bagosht">bagosht</option>
           
           </select>
           </div>

           <div class="form-group">
           <label for="price">Price</label>
           <input type="text" class="form-control" name="price" id="price">
           </div>

           <div class="form-group">
           <label for="location">Location</label>
           <select name="location" class="form-control" id="location" >
           
           <option value="erbil">erbil</option>
           <option value="suly">suly</option>
           <option value="duhok">duhok</option>
           
           </select>
           </div>

           <input type="submit" value="Submit" class="btn btn-primary">
           
        </form>
        
        </div>

       @endsection