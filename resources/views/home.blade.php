@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form methods="POST" action="{{route ('task.store')}}">
            @error('task')
                {{ $error}}
            @enderror
            @csrf
                <div class="row">
                    <div class="col-md-8">
                        <input class="form-control" name="text" type="text" placeholder="write your note here" />
                    </div>
                    <div class="col-md-4">
                        <button id="add" class="form-control btn btn-success" type="submit"> add</button>
                    </div>
                </div>
        </form>
    </div>
    <div class="col-md-8">
        <ul class="list-group mt-4">
            @forelse($tasks as $task)
            <li class="list-group-item mybox mt-4">
                <span class="float-left">{{$task->text}} </span>
                <span class="float-right"> <a href="#" > <i class="fas fa-edit text-info"></i> </a> / <a href="#"> <i class="fas fa-trash text-danger"></i> </a> </span>
            </li>
            @empty
            <li class="list-group-item mybox mt-4">
          you dont have any task 
            </li>
            @endforelse
          </ul>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('#add').on('click' , function(e){
            $.ajax({

            })
        })
        
    })

</script>


@endsection