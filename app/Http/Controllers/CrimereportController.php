<?php

namespace App\Http\Controllers;

use App\Mail\CrimeNotify;
use App\Models\crimereport;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CrimereportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crimeReport = crimereport::all();

        if (Auth::user()->role == 'Police')
            return view('police.pages.crimeReport.index')->with('crimeReport', $crimeReport);
        return view('backend.pages.crimeReport.index')->with('crimeReport', $crimeReport);
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
        $request->validate([
            'incidentype' => 'required',
            // 'eightenornot' => 'required',
            'forpforb' => 'required',
            'fullname' => 'required',
            'address' => 'required',
            'gender' => 'required',
            // 'dob' => 'required|before_or_equal:today'
        ]);
        // dd($request->incidentimage);
        $crimereport = new crimereport();
        $crimereport->incidentype = $request->incidentype;
        // $crimereport->eightenornot = $request->eightenornot;
        $crimereport->forpforb = $request->forpforb;
        $crimereport->fullname = $request->fullname;
        $crimereport->address = $request->address;
        $crimereport->contact = $request->contact;
        $crimereport->email = $request->email;
        $crimereport->dob = $request->dob;
        $crimereport->lat = $request->lat;
        $crimereport->lng = $request->lng;
        $crimereport->gender = $request->gender;
        $crimereport->drivinglicno = $request->drivinglicno;
        $crimereport->uploder_id = Auth::user()->id;


        $img_name = '';
        $img_path = '';
        if ($request->file('incidentimage')) {
            $img_file = $request->file('incidentimage');
            $img_name = 'incidentimage' . Str::lower(Str::random(9)) . '.' . $img_file->getClientOriginalExtension();
            $img_path = 'content/reportwantedcrimes/';
            $success = $img_file->move($img_path, $img_name);
        }
        $crimereport->incidentimage     = $img_path . $img_name;

        $crimereport->incidentaddress = $request->incidentaddress;
        $crimereport->incidenttime = $request->incidenttime;
        $crimereport->incidentdescription = $request->incidentdescription;
        $crimereport->save();

        foreach (User::where('role', 'Police')->get() as $police) {
            Mail::to($police->email)->send(new CrimeNotify());
        }

        return back()->with('success', 'crimereport Complant Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crimereport  $Crimereport
     * @return \Illuminate\Http\Response
     */
    public function show(Crimereport $Crimereport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crimereport  $Crimereport
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = crimereport::findorfail($id);

        if (Auth::user()->role == 'Police')
            return view('police.pages.crimereport.edit', ['data' => $data]);
        return view('backend.pages.crimereport.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crimereport  $Crimereport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $firReport = crimereport::findorfail($id);
        $request->validate([
            'status' => 'required|in:pending,processing,completed',
        ]);
        $firReport->status = $request->status;
        $firReport->save();

        if (Auth::user()->role == 'Police')
            return redirect(route('police.crime.remport'))->with('status', 'Updated Successfully!');
        return redirect(route('admin.crime.remport'))->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crimereport  $Crimereport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crimereport $Crimereport)
    {
        //
    }
}
