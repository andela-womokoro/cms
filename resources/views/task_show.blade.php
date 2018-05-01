@extends('shared.master')
@section('title', '')

@section('content')
    <p>Task name: {{ $task->id }}<p>

    {{ $task->content_id }}<br />
    {{ $task->user_id }}<br />
@endsection
