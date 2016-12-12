@extends('layouts.app')

@section('styles')

<style>

    
</style>
@endsection


@section('content')

<div class="center-align header">
    <a href="{{url('dashboard')}}"><i class="material-icons left md-36 dashboard-icon">dashboard</i></a>
    <h3>Dashboard</h3>
</div>

<div class="row">
    <div class="col s3">
        <ul class="collection with-header">
            <li class="collection-header center-align">
                <h5>Categories</h5>
            </li>
            @foreach($categories as $category)
            <li class="collection-item">
                <a href="{{ url('categorized-task/' . $category->id ) }}">
                    {{ $category->name }}
                </a>
            </li>
            @endforeach
        </ul>
        <a href="{{ url('add-category')}}" class="btn">
            <i class="material-icons left">mode_edit</i>
            Manage Category
        </a>
    </div>
    
    <div class="col s9 center-align">
        <ul class="collection with-header">
            <li class="collection-header center-align">            
                <h5>Tasks</h5>
            </li>
            @foreach($tasks as $task)
            <li class="collection-item">
                <a href="{{ url('show-task/' . $task->id ) }}">
                    {{ $task->title }}
                </a>
                <form class="right-align" method="post" action="{{ url('delete-task/' . $task->id) }}">
                   {{ csrf_field() }}
                    <button type="submit" class="material-icons grey-text delete-btn">delete</button>
                </form>
            </li>
            @endforeach
        </ul>
        <a href="{{ url('add-task') }}" class="btn left-align"><i class="material-icons left">add</i>Add New</a> 
    </div>
</div>

@endsection


@section('javascript')
@endsection
