@extends('layouts.app')


@section('styles')
    <style>
        
    </style>
@endsection

@section('content')   
    <div id="welcome-box" class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    Welcome!
                </div>
                <div class="panel-body">
                    <div class="text-center">
                        <p class="lead">Hello World!</p>
                        <a href="{{ url('dashboard') }}" class="btn btn-primary btn-lg">Enter Here!</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection