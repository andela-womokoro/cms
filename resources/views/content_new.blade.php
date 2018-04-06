@extends('shared.master')
@section('title', '')

@section('content')
    <h3>Create content</h3>
    <form method="POST" action="/content/add">
	    {!! csrf_field() !!}
	    <div>
	        Title
	        <input type="text" name="title" value="{{ old('title') }}">
	    </div>
	    <div>
	    	Industry
	    	<select name="industry">
	    		<option></option>
	    		<option>Science</option>
	    		<option>Engineering</option>
	    		<option>Humanities</option>
	    	</select>
	    </div>
	    <div>
	       Body<br />
	       <textarea name="body" rows="10" cols="100"></textarea>
	    </div>
	    <div>
	        <button>Preview</button>
	        <button type="submit">Publish</button>
	    </div>
	</form>
@endsection
