@extends('layouts.app')

@section('content')
<h1 class="text-center my-5"> Create To Do </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                     <ul class="list-group">
                    @foreach ($errors ->all() as $error)
                         <li class="list-group-item">
                        {{$error}}
                         </li>
                            @endforeach  
                    
                    </ul> 
                    @endif
              
                    </div>
                        <form action="/store-todos" method="POST">
                            @csrf
                                <div class="form-group">
                                    
                                <input type="text" class="form-control" name="name" placeholder="Name">
                                                       
                                </div>   
                                <div class="form-group">
                                <textarea name="description" id="" cols="5" rows="5" class="form-control" placeholder="Description"></textarea>
                                </div>   
                                
                                <div class="form-group text-center">
                                    <button class="btn btn-success" type="submit">Create To-do</button>
                                </div>
                                </form>  
                </div>
            </div>
        </div>
         
        </div>
    </div>

@endsection

