@extends('layouts/app')
        
        @section('content')
        <div class="flex-center position-ref full-height">
        
            <div class="content">
              <img src="/img/pizza.png" alt="" width="80" height="80">
                <div class="title m-b-md">
                    Pizza
                </div>

                
                    
                    
              
                <table class="table table-dark">
                    <thead>
                      
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        </tr>
                      
                    </thead>
                    <tbody>
                        @foreach($pizza as $p)
                        <tr>
                        <th scope="row">{{$p->id}}</th>
                        <td>{{ $p->name }}</td>
                        <td>{{$p->type}}</td>
                        <td>{{$p->price}}$</td>
                        <td><a href="/pizza/{{$p->id}}" class="btn btn-primary">Show</a></td>
                        <td><a href="/pizza/edit/{{$p->id}}" class="btn btn-success">Edit</a></td>
                        
                        </tr>
                        @endforeach 
                    </tbody>
                </table>

               

               
            </div>
            
        </div>
       @endsection