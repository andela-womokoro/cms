@extends('shared.master')
@section('title', '')

@section('content')
    <h3>All published contents</h3>
    @if(Auth::user()->user_type == 0)
        <!-- user type 0 denotes an editore and type 1 denotes a contributor. Only editors can assign content -->
        <form method="post" action="/tasks/add">
            {!! csrf_field() !!}
            <table width="100%" align="center">
            	<tr align="left">
            		<th><br /></th>
                    <th>Title</th>
            		<th>Industry</th>
            		<th>Body</th>
            	</tr>
            	@foreach($contents as $content)
            	<tr align="left">
                    <td><input type="checkbox" name="content_id" value="{{ $content->id }}" /></td>
            		<td>{{ $content->title }}</td>
            		<td>{{ $content->industry }}</td>
            		<td>{{ $content->body }}</td>
            	</tr>
            	@endforeach
            </table>
            <br />
            <!-- for simplicity and due to time constraint, I hard coded users' values here. In a full fledged app, these values would be dynamically generated -->
            <select name="user_id">
                <option value="1"></option>
                <option value="1">wilson</option>
            </select>
            <input type="submit" value="Assign" />
        </form>
    @else
        <table width="100%" align="center">
            <tr align="left">
                <th>Title</th>
                <th>Industry</th>
                <th>Body</th>
            </tr>
            @foreach($contents as $content)
            <tr align="left">
                <td>{{ $content->title }}</td>
                <td>{{ $content->industry }}</td>
                <td>{{ $content->body }}</td>
            </tr>
            @endforeach
        </table>
    @endif
@endsection
