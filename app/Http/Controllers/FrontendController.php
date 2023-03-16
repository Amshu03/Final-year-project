<?php

namespace App\Http\Controllers;

use App\Models\reportwantedcrime;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function home()
    {
        if (Auth::user())
            return view('frontend.home');
        else
            return view('frontend.index');
    }
    public function homepage()
    {
        return view('frontend.home');
    }
    public function aboutpage()
    {
        return view('frontend.about');
    }

    public function contactpage()
    {
        return view('frontend.contact');
    }

    public function report(Request $request)
    {
        $date = $request->date;
        // dd($date);
        $user = User::where('id', Auth::user()->id)->first();
        $firreport = $user->firreports()->whereDate('created_at', $date)->get();
        $crimereport = $user->crimereports()->whereDate('created_at', $date)->get();
        $reports =  $firreport->merge($crimereport);
        return view('frontend.report', compact('reports'));
    }
    public function askquestion()
    {
        return view('frontend.askquestion');
    }
    public function crimeReport()
    {
        $viewwantedboard = reportwantedcrime::where('status', 'active')->first();
        return view('frontend.crimereporting', compact('viewwantedboard'));
    }
    public function reportwantedcrime()
    {
        return view('frontend.reportwantedcrime');
    }
    public function viewwantedboard()
    {
        $viewwantedboard = reportwantedcrime::where('status', 'active')->get();
        return view('frontend.viewwantedboard', compact('viewwantedboard'));
    }
    public function firReport()
    {
        return view('frontend.firreport');
    }
    public function crimeReporting()
    {
        return view('frontend.crimereportingcrime');
    }
}
