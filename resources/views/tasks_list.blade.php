@extends('shared.master')
@section('title', '')

@section('content')
	<table width="100%" align="center">
        <tr align="left">
            <th>#</th>
            <th>Content</th>
            <th>User</th>
        </tr>
        @foreach($tasks as $task)
        <tr align="left">
            <td>{{ $task->id }}</td>
            <td>{{ $task->content_id }}</td>
            <td>{{ $task->user_id }}</td>
        </tr>
        @endforeach
    </table>
@endsection
