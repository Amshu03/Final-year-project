<?php

namespace App\Http\Controllers;

use App\Models\FirReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firReport = FirReport::all();
        if (Auth::user()->role == 'Police')
            return view('police.pages.firReport.index')->with('firReport', $firReport);
        return view('backend.pages.firReport.index')->with('firReport', $firReport);
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
            'dist' => 'required',
            'ps' => 'required',
            'year' => 'required',
            'fir_no' => 'required',
            'date' => 'required',
            'are_you_18' => 'required|in:yes,no',
            // 'occurrence_offense' => 'required',
            // 'information_recieved_at_ps' => 'required',
            // 'ganeral_diary_reference_entry_no' => 'required',
            // 'ganeral_diary_reference_time' => 'required',
            // 'type_of_information' => 'required',
            // 'direction_distance_from_ps' => 'required',
            // 'beat_no' => 'required',
            // 'address' => 'required',
            // 'outside_of_limit_ps_name' => 'required',
            // 'district' => 'required',
            'name' => 'required',
            'father_or_husband_name' => 'required',
            // 'date_of_birth' => 'required',
            'nationality' => 'required',
            'occupation' => 'required',
            'person_address' => 'required',
            'value_of_properties_stolen' => 'required',
            // 'investigation' => 'required',
            // 'rank' => 'required',
            // 'transfer_to_ps' => 'required',
            // 'officer_name' => 'required',
            // 'officer_rank' => 'required',
            // 'officer_no' => 'required',
            // 'officer_signature' => 'required',
            // 'officer_date' => 'required',
            // 'transfer_to_ps' => 'required',
            // 'fir_contents' => 'required',
            // 'inquest_report' => 'required',
            // 'particulars_of_properties_stolen' => 'required',
            // 'reason_for_delay_report' => 'required',
            // 'detail_of_suspected' => 'required',
            // 'act' => 'required|array',
            // 'section' => 'required|array',
        ]);
        $data = $request->all();
        // $data['act_section'] = '';
        // foreach ($request->act as $key => $act) {
        //     $act_section = $act . '`' . $request->section[$key];
        //     $data['act_section'] .= $act_section . '|';
        // }
        $data['detail_of_known_file'] = null;
        if ($request->hasFile('detail_of_known_file')) {
            $img = $request->file('detail_of_known_file');
            $img_name = now()->format('ymdhis') . rand(1000, 9999) . 'sig.' . $img->getClientOriginalExtension();
            $img_path = 'upload/signature/';
            $img->move($img_path, $img_name);
            $data['detail_of_known_file'] = $img_path . $img_name;
        }
        $data['uploder_id'] = Auth::user()->id;
        $data['properties_stole_file'] = null;
        if ($request->hasFile('properties_stole_file')) {
            $img = $request->file('properties_stole_file');
            $img_name = now()->format('ymdhis') . rand(1000, 9999) . 'sig.' . $img->getClientOriginalExtension();
            $img_path = 'upload/signature/';
            $img->move($img_path, $img_name);
            $data['properties_stole_file'] = $img_path . $img_name;
        }
        $data['evidance_file'] = null;
        if ($request->hasFile('evidance_file')) {
            $img = $request->file('evidance_file');
            $img_name = now()->format('ymdhis') . rand(1000, 9999) . 'sig.' . $img->getClientOriginalExtension();
            $img_path = 'upload/signature/';
            $img->move($img_path, $img_name);
            $data['evidance_file'] = $img_path . $img_name;
        }
        FirReport::create($data);
        return back()->with('success', 'Fir Complant Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FirReport  $firReport
     * @return \Illuminate\Http\Response
     */
    public function show(FirReport $firReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FirReport  $firReport
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = FirReport::findorfail($id);
        if (Auth::user()->role == 'Police')
            return view('police.pages.firReport.edit', ['data' => $data]);
        return view('backend.pages.firReport.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FirReport  $firReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $firReport = FirReport::findorfail($id);
        $request->validate([
            'status' => 'required|in:pending,processing,completed',
        ]);
        $firReport->status = $request->status;
        $firReport->save();

        if (Auth::user()->role == 'Police')
            return redirect(route('police.fir.remport'))->with('status', 'Updated Successfully!');
        return redirect(route('admin.fir.remport'))->with('status', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirReport  $firReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirReport $firReport)
    {
        //
    }
}
