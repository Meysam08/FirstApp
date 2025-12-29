@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My Daily Tasks</h1>

        <!-- Simple Form (Pure Laravel, no JavaScript needed) -->
        <form method="POST" action="/tasks">
            @csrf
            <input type="text" name="task" placeholder="Add new task" required>
            <button type="submit">Add Task</button>
        </form>

        <!-- Task List -->
        <ul id="taskList">
            @foreach($tasks as $task)
                <li>{{ $task->name }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Add jQuery for interactivity (optional, simple) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Just ONE simple feature: mark as complete
        $(document).ready(function() {
            $('li').click(function() {
                $(this).toggleClass('completed');
            });
        });
    </script>

    <style>
        .completed { text-decoration: line-through; color: #888; }
    </style>
@endsection
