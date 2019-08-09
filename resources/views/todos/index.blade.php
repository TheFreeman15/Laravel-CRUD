@extends('layouts.app')
@section('content')
<h1 class="text-center my-5">  To-Do app </h1>
<div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card default">
                    <div class="card-header text-center">Todos</div>
                    <div class="card-body">
                            @foreach($todos as $value)
                            <ul>
                            <li class="list-group-item">
                              {{$value->name}}
                              
                            <a href="/todos/{{$value->id}}" class="btn btn-primary btn-sm float-right">View Details</a>
                      
                                
                            </li>
                            </ul>
                            @endforeach
                            
                    </div>
                </div>
                @endsection