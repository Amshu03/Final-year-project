<?php

namespace App\Http\Controllers;

use App\Models\reportwantedcrime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportwantedcrimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportwantedcrimes = reportwantedcrime::all();
        if (Auth::user()->role == 'Police')
            return view('police.pages.reportwantedcrime.index')->with('reportwantedcrimes', $reportwantedcrimes);
        return view('backend.pages.reportwantedcrime.index')->with('reportwantedcrimes', $reportwantedcrimes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role == 'Police')
            return view('police.pages.reportwantedcrime.create');
        return view('backend.pages.reportwantedcrime.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reportwantedcrimes = new reportwantedcrime();
        $reportwantedcrimes->description = $request->description;
        $reportwantedcrimes->datetime = $request->datetime;
        $img_name = '';
        $img_path = '';
        if ($request->file('image')) {
            $img_file = $request->file('image');
            $img_name = 'image' . Str::lower(Str::random(9)) . '.' . $img_file->getClientOriginalExtension();
            $img_path = 'content/reportwantedcrimes/';
            $success = $img_file->move($img_path, $img_name);
        }
        $reportwantedcrimes->image = $img_path . $img_name;
        $reportwantedcrimes->save();
        return redirect()->back()->with('status', 'Report wanted crime Added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reportwantedcrimes = reportwantedcrime::find($id);
        if (Auth::user()->role == 'Police')
            return view('police.pages.reportwantedcrime.edit', ['data' => $reportwantedcrimes]);
        return view('backend.pages.reportwantedcrime.edit', ['data' => $reportwantedcrimes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(reportwantedcrime $reportwantedcrime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reportwantedcrimes = reportwantedcrime::find($id);
        $reportwantedcrimes->description = $request->description;
        $reportwantedcrimes->datetime = $request->datetime;
        $reportwantedcrimes->status = $request->status;
        $img_name = '';
        $img_path = '';
        if ($request->file('image')) {
            $img_file = $request->file('image');
            $img_name = 'image' . Str::lower(Str::random(9)) . '.' . $img_file->getClientOriginalExtension();
            $img_path = 'content/reportwantedcrimes/';
            $success = $img_file->move($img_path, $img_name);
            $reportwantedcrimes->image = $img_path . $img_name;
        }
        $reportwantedcrimes->save();
        if (Auth::user()->role == 'Police')
            return redirect()->route('police.reportwantedcrime.index')->with('status', 'Reportwantedcrime Updated Successfully');
        return redirect()->route('admin.reportwantedcrime.index')->with('status', 'Reportwantedcrime Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $reportwantedcrimes = reportwantedcrime::where('id', $id)->first();
        $reportwantedcrimes->delete();
        return back()->with('status', 'reportwantedcrime Deleted Sucessfully');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    // update Status
    public function reportwantedcrimestatus($id)
    {
        $reportwantedcrimes = reportwantedcrime::findorfail($id);
        if ($reportwantedcrimes != null) {
            if ($reportwantedcrimes->status == 'active') {
                $reportwantedcrimes->status = 'inactive';
            } else {
                $reportwantedcrimes->status = 'active';
            }
            $reportwantedcrimes->save();
            return back()->with('success', 'Status Updated Succesfully !');
        } else {
            return back()->with('error', 'Sorry reportwantedcrimes Didnot Found.');
        }
    }
    // update Role
    public function reportwantedcrimerole($id)
    {
        $reportwantedcrimes = reportwantedcrime::findorfail($id);
        if ($reportwantedcrimes != null) {
            if ($reportwantedcrimes->role == 'reportwantedcrime') {
                $reportwantedcrimes->role = 'Admin';
            } else {
                $reportwantedcrimes->role = 'reportwantedcrime';
            }
            $reportwantedcrimes->save();
            return back()->with('success', 'Status Updated Succesfully !');
        } else {
            return back()->with('error', 'Sorry reportwantedcrimes not Found.');
        }
    }
}
