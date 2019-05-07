<?php

namespace App\Http\Controllers;

use App\BloodBankProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BloodBankProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodbank = BloodBankProfile::where('user_id', '=', Auth::user()->id)->first();

        return view('bloodbankprofiles.index')->with('bloodbankprofile', $bloodbank);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bloodbankprofiles.CreateOrEdit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required',
            'address' => 'required',
            'in_charge' => 'required',
            'in_charge_contact' => 'required'
        ]);
        
        $bloodBankProfile = new BloodBankProfile;
        $bloodBankProfile->user_id = Auth::user()->id;
        $bloodBankProfile->phone = $request->input('phone');
        $bloodBankProfile->address = $request->input('address');
        $bloodBankProfile->in_charge = $request->input('in_charge');
        $bloodBankProfile->in_charge_contact = $request->input('in_charge_contact');
        $bloodBankProfile->save();


        return redirect()->route('bloodbankprofiles.index')->with('success', 'Blood Bank Profile Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BloodBankProfile  $bloodBankProfile
     * @return \Illuminate\Http\Response
     */
    public function show(BloodBankProfile $bloodBankProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BloodBankProfile  $bloodBankProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodBankProfile $bloodBankProfile)
    {
        $bloodbank = BloodBankProfile::where('user_id', '=', Auth::user()->id)->first();
        return view('bloodbankprofiles.CreateOrEdit')->with('bloodbankprofile', $bloodbank);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BloodBankProfile  $bloodBankProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodBankProfile $bloodBankProfile)
    {
        $this->validate($request, [
            'phone' => 'required',
            'address' => 'required',
            'in_charge' => 'required',
            'in_charge_contact' => 'required'
        ]);

        $bloodBankProfile = Auth::user()->bloodbankprofile;
        $bloodBankProfile->user_id = Auth::user()->id;
        $bloodBankProfile->phone = $request->input('phone');
        $bloodBankProfile->address = $request->input('address');
        $bloodBankProfile->in_charge = $request->input('in_charge');
        $bloodBankProfile->in_charge_contact = $request->input('in_charge_contact');
        $bloodBankProfile->save();


        return redirect()->route('bloodbankprofiles.index')->with('success', 'Blood Bank Profile Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BloodBankProfile  $bloodBankProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodBankProfile $bloodBankProfile)
    {
        //
    }
}
