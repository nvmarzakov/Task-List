@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task'=> $task->id]) : route('tasks.store') }}"
    class="w-50 rounded-5 text-center" style="background-color: rgba(255, 255, 255, 0.5);">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title" class="d-block text-uppercase ">
                Title
            </label>
            <input placeholder="Enter Title"
                   class="w-50 rounded-3 @error('title') border-danger-subtle @enderror"
                   type="text" name="title"
                   id="title"
                   value="{{ $task->title ?? old('title') }}">
            @error('title')
            <p class="error-message text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="d-block text-uppercase">Description</label>
            <textarea placeholder="Enter a description" class="rounded-3 w-50 @error('title') border-danger @enderror" name="description" id="description" rows="5">{{ $task->title ?? old('description') }}</textarea>
            @error('description')
            <p class="error-message text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description" class="d-block text-uppercase">Long Description</label>
            <textarea placeholder="Enter a Long Description" class="rounded-3 w-50 @error('title') border-danger @enderror" name="long_description" id="long_description" rows="10">{{ $task->long_description ?? old('long_description')}}</textarea>
            @error('long_description')
            <p class="error-message text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-secondary my-4">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset
            </button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
@endsection
