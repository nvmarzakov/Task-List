@extends('layouts.app')

@section('title', 'The list of tasks')


@section('content')
    <div>
        <a href="{{ route('tasks.create') }}">Add Task</a>
    </div>
    @forelse($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}"> {{ $task->title }}</a>
        </div>
    @empty
        <div>There is no tasks!</div>
    @endforelse

    @if ($task->count())
        <div>{{$tasks->links() }}</div>
    @endif
@endsection
{{--        @if(count($tasks) > 0)--}}
{{--            @foreach($tasks as $task)--}}
{{--                <div>--}}
{{--                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}"> {{ $task->title }}</a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            <div>There are no tasks!</div>--}}
{{--        @endif--}}

