@extends('layouts.app')


@section('title', $task->title)

@section('content')
    <section class="container task d-flex justify-content-center">
        <div class="card text-center shadow-lg .bg-light text-secondary-emphasis">
            <div class="card-header text-end mb-4">
                <a href="{{ route('tasks.index') }}"
                   class="btn btn-primary text-decoration-none">Go back!</a>
            </div>
            <div class="card-body">
                <h5 class="card-title mb-4">Created {{ $task->created_at->diffForHumans()}} <<<>>> Updated {{ $task->updated_at->diffForHumans()}}</h5>
                <p class="mb-4 ">{{ $task->description }}</p>

                @if ($task->long_description)
                    <p class="mb-4">{{ $task->long_description }}</p>
                @endif
                <p class="mb-4">
                    @if($task->completed)
                        <span class="text-success">Completed!</span>
                    @else
                        <span class="text-danger">Not Completed!</span>
                    @endif
                </p>
                <div class="card-footer">
                    <ul class="nav nav-tabs card-header-tabs my-2 d-flex justify-content-center gap-2">
                        <li class="nav-item">
                            <a href="{{ route('tasks.edit', ['task'=>$task->id]) }}"
                               class="btn btn-primary">Edit</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-dark">
                                    Mark as {{$task->completed ? 'not completed' : 'completed'}}
                                </button>

                            </form>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('tasks.destroy', ['task'=> $task->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
