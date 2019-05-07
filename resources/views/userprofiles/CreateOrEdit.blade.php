@extends('layouts.app')

@section('title')

	@if(isset($userprofile)) Edit @else Add @endif User Profile
	
@endsection

@section('content')


	<div class="card">
		<div class="card-header">@if(isset($userprofile)) Edit @else Create @endif Blood Bank Profile</div>
		<div class="card-body">
			
			{{ Form::open(['action' => isset($userprofile)? ['UserProfileController@update', $userprofile]:'UserProfileController@store', 'method' => 'POST']) }}

				{{ Form::label('phone', 'Phone Number', ['class' => 'col-form-label']) }}
				{{ Form::text('phone', isset($userprofile)? $userprofile->phone: '', ['class' => 'form-control']) }}

				{{ Form::label('blood_type_id', 'Blood Type', ['class' => 'col-form-label']) }}
				<select id="blood_type_id" name="blood_type_id" class="form-control">
					@foreach($bloodtypes as $bloodtype)

						<option value="{{ $bloodtype->id }}">{{ $bloodtype->type }}</option>

					@endforeach
				</select>

				{{ Form::label('age', 'Age', ['class' => 'col-form-label']) }}
				{{ Form::number('age', isset($userprofile)? $userprofile->age: '', ['class' => 'form-control']) }}

				@if(isset($userprofile))
					{{ Form::hidden('_method', 'PUT') }}
				@endif

				<div class="text-center">
					{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
				</div>

			{{ Form::close() }}

		</div>
	</div>

@endsection