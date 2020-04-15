        @extends('layouts/app')
        
        @section('content')
        <div class="flex-center position-ref full-height">
        
            <div class="content">
              <img src="/img/pizza.png" alt="" width="80" height="80">
                <div class="title m-b-md">
                    Pizza
                </div>
              
               

               <a href="/pizza/create" class="btn btn-primary">Order Pizza</a>
               <p class="mssg">{{session('mssg')}}</p>
            </div>
            
        </div>
       @endsection