@extends('layouts/app')
        
        @section('content')
        

       
        
        <h1 class="text-center">Order for: {{ $pizza->name}}</h1>
        <p class="type text-center">{{$pizza->type}}</p>
        <p class="price text-center">{{$pizza->price}}</p>
        <p class="location text-center">{{$pizza->location}}</p>
          
          <form class="text-center" action="/pizza/{{$pizza->id}}" method="post">
              @csrf
                
              @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">

          </form>

          <a href="/allpizza" class="btn btn-primary"><--Back to Home</a>
        
       @endsection