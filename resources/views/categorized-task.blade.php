@extends('layouts.app')

@section('styles')

<style>

    .material-icons.md-36 { font-size: 36px; }

</style>
@endsection


@section('content')

<div class="center-align">
    <a href="{{url('dashboard')}}"><i class="material-icons md-36 left dashboard-icon">dashboard</i></a>
    <h3>View Tasks</h3>
</div>

<div class="row">
    <div class="col s12">
        <ul class="collection with-header">
            <li class="collection-header center-align">
                <h4>{{ $category->name }}</h4>
            </li>
            @foreach($tasks as $task)
            <li class="collection-item center-align">
                  <a class="title" href="{{ url('show-task/' . $task->id ) }}">
                    {{ $task->title }}
                  </a>
                  <form class="right-align" method="post" action="{{ url('delete-task/' . $task->id) }}">
                     {{ csrf_field() }}
                     <button class="material-icons grey-text delete-btn">delete</button>
                  </form>    
            </li>
            @endforeach
        </ul>
    </div>   
        <a href="{{ url('add-task') }}" class="btn left-align"><i class="material-icons left">add</i>Add New</a> 

</div>

@endsection


@section('javascript')
@endsection
