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
        $bloodbank = BloodBankProfile::where('user_id', '=', Auth::user()->id)->get();

        return view('bloodbankprofiles.index')->with('bloodbank', bloodbank);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
