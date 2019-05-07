@extends('layouts.app')

@section('title')
    Blood Bank Profile
@endsection

@section('content')
    
    <div class="card">
    	<div class="card-header">Blood Bank Profile Details</div>
    	<div class="card-body">
    		
    		@if($bloodbankprofile)
    			Name: {{ Auth::user()->name }}<br>
    			Phone: {{ $bloodbankprofile->phone }}<br>
    			Address: {{ $bloodbankprofile->address }}<br>
    			Doctor-in-charge: {{ $bloodbankprofile->in_charge }}<br>
    			Contact: {{ $bloodbankprofile->in_charge_contact }}<br>
    		@endif

    	</div>
    </div>

    <br>

    @if($bloodbankprofile)
    	<div class="text-center">
	    	<a href="{{ route('bloodbankprofiles.edit', Auth::user()->bloodbankprofile) }}" class="btn btn-success">Edit bloodbankprofile</a>
	    </div>
    @else
    	<div class="text-center">
	    	<a href="{{ route('bloodbankprofiles.create') }}" class="btn btn-success">Add bloodbankprofile</a>
	    </div>
    @endif

@endsection