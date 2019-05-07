@extends('layouts.app')

@section('title')
    User Profile
@endsection

@section('content')
    
    <div class="card">
    	<div class="card-header">User Profile Details</div>
    	<div class="card-body">
    		
    		@if(count($userprofile) > 0)
    			Yes
    		@endif

    	</div>
    </div>

    <br>

    @if(count($userprofile) > 0)
    	<div class="text-center">
	    	<a href="{{ route('userprofiles.edit', $userprofile) }}" class="btn btn-success">Edit Userprofile</a>
	    </div>
    @else
    	<div class="text-center">
	    	<a href="{{ route('userprofiles.create') }}" class="btn btn-success">Add Userprofile</a>
	    </div>
    @endif

@endsection