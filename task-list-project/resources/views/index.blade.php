@extends('layouts.app')

@section('title', 'The list of tasks')


@section('content')
    <section class="card shadow-lg bg-primary-subtle text-secondary-emphasis">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <nav class="my-4 text-center">
                    <a href="{{ route('tasks.create') }}"
                       class="btn btn-dark text-decoration-none text-l">Add Task</a>
                </nav>
            </div>
        </div>
        <div class="row card-body ">
            <div class="list-group list-group-numbered">
                <ol class="d-flex flex-column gap-1 justify-content-center align-items-center">
                    @forelse($tasks as $task)
                        <li class="col-12 text-center">
                            <div class="rounded-2">
                                <a  href="{{ route('tasks.show', ['task' => $task->id]) }}"
                                    @class(['list-group-item text-decoration-line-through text-success border border-success' => $task->completed,'list-group-item text-danger border border-danger' => !$task->completed ])> {{ $task->title }}</a>
                            </div>

                        </li>
                    @empty
                        <div>There is no tasks!</div>
                    @endforelse

                    @if ($task->count())
                        <nav class="my-5">
                            {{$tasks->links() }}
                        </nav>
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

