@extends('layouts/app')

@section('styles')

<style>

    

</style>

@endsection

@section('content')
    <div class="center-align">
        <a href="{{url('dashboard')}}"><i class="material-icons md-36 left dashboard-icon">dashboard</i></a>
        @if( $page == 'add' )
        <h3>Add New Task</h3>
        @elseif($page == 'show' )
        <h3>View Task</h3>
        @endif
    </div>
    <div class="row">
        <div class="col s12">
            <form method="post" action="{{ url('process-' . $page . '-task' . $id) }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s3">
                       @if( $page == 'add')
                           <select name="category">
                              <option value="" disabled selected>Select Category</option>
                              @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                              @endforeach
                           </select>
                           <label>Category: </label>
                       @else
                           <div class="chip">
                               {{ $category->name }}
                           </div>
                       
                       @endif
                        
                    </div>
                    <div class="input-field col s9">
                        <input value="{{ $task->title or '' }}" name="title" id="title" type="text">
                        <label for="title">Title: </label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="description" id="description" type="text" class="materialize-textarea" length="200">{!! $task->description or '' !!}</textarea>
                        <label for="description">Description: </label>
                    </div>
                </div>
                
                @if( $page == 'add' )
                <button class="btn" type="submit">Submit</button>
                @elseif($page == 'show')
                <form method="post" action="{{ url('delete-task/' . $task->id) }}">
                    {{ csrf_field() }}
                    <button type="submit" class="material-icons grey-text delete-btn">delete</button>
                </form>
                @endif
            </form>
               

    </div>
</div>
@endsection


@section('javascript')

<script>
    $(document).ready(function() {
        
    $('select').material_select();
        
  });
</script>
    
@endsection