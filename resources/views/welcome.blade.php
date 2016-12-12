@extends('layouts.app')


@section('styles')
    <style>
        #welcome-title {
            margin-top: 200px;
            color: darkorange;
            font-family: 'Gloria Hallelujah', cursive;
        }
        #app-name {
            font-family: 'Gloria Hallelujah', cursive;
        }
        
        #nav-btn {
            margin-top: 50px;
        }
        
        #dashboard {
            position: fixed;
            top: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="center-align" id="dashboard">
        <a href="{{url('dashboard')}}"><i class="material-icons md-36 left dashboard-icon">dashboard</i></a>
    </div> 
      
    <h2 class="center-align" id="welcome-title">Categorize Your Tasks</h2>
    <h1 class="center-align" id="app-name">With Clero</h1>

    <div class="center-align" id="nav-btn">
        <a href={{ url('dashboard') }} class="waves-effect btn-large">Enter</a>
    </div>
@endsection

@section('javascript')
@endsection