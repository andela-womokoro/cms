@extends('shared.master')
@section('title', '')

@section('content')
    <h3>All published contents</h3>
    <table width="100%" align="center">
    	<tr align="left">
    		<th>Title</th>
    		<th>Industry</th>
    		<th>Body</th>
    	</tr>
    	@foreach($userContent as $content)
    	<tr align="left">
    		<td>{{ $content->title }}</td>
    		<td>{{ $content->industry }}</td>
    		<td>{{ $content->body }}</td>
    	</tr>
    	@endforeach
    </table>
@endsection
