@extends('layouts.app')


@section('styles')

<style>
    
</style>
@endsection


@section('content')

<div class="center-align header">
    <a href="{{url('dashboard')}}"><i class="material-icons md-36 left dashboard-icon ">dashboard</i></a>
    <h3>Manage Categories</h3>
</div>

<div class="row">
    <div class="col s12 m6">
        <ul class="collection with-header">
            <li class="collection-header center-align">
                <h5>Existing Categories</h5>
            </li>
            @foreach($categories as $category)
            <li class="collection-item">
                <a href="{{ url('categorized-task/' . $category->id)}}">
                    {{ $category->name }}
                </a>
                <form class="right-align" method="post" action="{{ url('delete-category/' . $category->id ) }}">
                    {{ csrf_field() }}
                    <button type="submit" class="material-icons grey-text">delete</button>
                </form> 
            </li>
            @endforeach
        </ul>
    </div>
    
    <div class="col s6 m6">
        <h5>Add New:</h5>
        <form method="post" action="{{ url('process-add-category') }}">
            {{ csrf_field() }}
            
            <label for="name">Name: </label>
            <input id="name" name="name" type="text">
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
