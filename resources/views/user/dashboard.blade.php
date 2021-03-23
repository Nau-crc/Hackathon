@extends('user.layouts.user')

@section('content')

<ul>
    @foreach($tasks as $task)
        <li>
            <h1 class="taskTitle">{{ task->title }}</h1>
            <h5 class ="taskStatus">{{ task->status }}</p>
            <p class="taskDueDate">{{ task->dueDate }}</p>
        </li>
    @endforeach
</ul>

@endsection