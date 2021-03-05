@extends('layouts.app')
@section('title','Post')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{$todo->title}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('todos.index')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                <input type="text" name="name" class="form-control" placeholder="titulo" value="{{$todo->title}}" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User:</strong>
                <input type="text" name="name" class="form-control" placeholder="titulo" value="{{$user->name}}" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>completed:</strong>
                <input type="text" name="name" class="form-control" placeholder="titulo" value="{{$todo->completed==false?'false':'true'}}" disabled>
            </div>
        </div>
        
    </div>
@endsection