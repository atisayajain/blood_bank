@extends('layouts.app')

@section('title')

	@if(isset($bloodbankprofile)) Edit @else Add @endif User Profile
	
@endsection

@section('content')


	<div class="card">
		<div class="card-header">@if(isset($bloodbankprofile)) Edit @else Add @endif User Profile</div>
		<div class="card-body">
			
			{{ Form::open(['action' => isset($bloodbankprofile)? ['BloodBankProfileController@update', $bloodbankprofile]:'BloodBankProfileController@store', 'method' => 'POST']) }}

				{{ Form::label('phone', 'Phone Number', ['class' => 'col-form-label']) }}
				{{ Form::text('phone', isset($bloodbankprofile)? $bloodbankprofile->phone: '', ['class' => 'form-control', 'required' => 'required']) }}

				{{ Form::label('address', 'Address', ['class' => 'col-form-label']) }}
				{{ Form::text('address', isset($bloodbankprofile)? $bloodbankprofile->address: '', ['class' => 'form-control', 'required' => 'required']) }}

				{{ Form::label('in_charge', 'Doctor-in-charge', ['class' => 'col-form-label']) }}
				{{ Form::text('in_charge', isset($bloodbankprofile)? $bloodbankprofile->in_charge: '', ['class' => 'form-control', 'required' => 'required']) }}

				{{ Form::label('in_charge_contact', 'Doctor\'s Contact', ['class' => 'col-form-label']) }}
				{{ Form::text('in_charge_contact', isset($bloodbankprofile)? $bloodbankprofile->in_charge_contact: '', ['class' => 'form-control', 'required' => 'required']) }}

				@if(isset($bloodbankprofile))
					{{ Form::hidden('_method', 'PUT') }}
				@endif

				<div class="text-center">
					{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
				</div>

			{{ Form::close() }}

		</div>
	</div>

@endsection