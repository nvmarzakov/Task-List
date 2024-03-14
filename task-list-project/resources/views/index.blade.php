@extends('layouts.app')


@section('title', 'The list of tasks')


@section('content')
    <section class="card w-50 shadow-lg rounded-5" style="background-color: rgba(255, 255, 255, 0.5);">
        <div class="row card-body my-4">
            <div class="list-group list-group-numbered">
                <ol class="d-flex flex-column gap-1 justify-content-center align-items-center">
                    @if($tasks->count())
                        @foreach($tasks as $task)
                            <li class="col-12 text-center">
                                <div class="rounded-2 d-flex justify-content-center ">
                                    <a  href="{{ route('tasks.show', ['task' => $task->id]) }}"
                                        @class(['w-75 list-group-item text-decoration-line-through text-success border border-success' => $task->completed,'w-75 list-group-item text-danger border border-danger' => !$task->completed ])> {{ $task->title }}</a>
                                </div>
                            </li>
                        @endforeach
                        @if ($task->count())
                                <nav class="my-5">
                                    {{$tasks->links() }}
                                </nav>
                            @endif
                    @else
                        <div class="fs-4" style="color: #ffffff">There is no tasks!</div>
                    @endif



                </ol>

            </div>

        </div>

    </section>

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

