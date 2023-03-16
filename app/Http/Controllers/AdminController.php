<?php

namespace App\Http\Controllers;

use App\Models\AskQuestion;
use App\Models\Contact;
use App\Models\crimereport;
use App\Models\FirReport;
use App\Models\reportwantedcrime;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function admin()
    {
        $max_loop = 7;
        $dates = [];
        $wanted_data = [];
        $fir_data = [];
        $crime_data = [];
        for ($i = 0; $i < $max_loop; $i++) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            array_push($dates, $date);
            $data = reportwantedcrime::whereDate('created_at', $date)->count();
            array_push($wanted_data, $data);
            $data = FirReport::whereDate('created_at', $date)->count();
            array_push($fir_data, $data);
            $data = crimereport::whereDate('created_at', $date)->count();
            array_push($crime_data, $data);
        }
        // dd(json_encode($dates));
        return view('backend.pages.dashboard', compact('dates', 'wanted_data', 'fir_data', 'crime_data'));
    }
    public function profile()
    {
        $profile = Auth::user();
        return view('backend.pages.users.profile', compact('profile'));
    }
    public function profileUpdate(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|string|unique:users,email,' . $users->id,
            'password' => 'nullable|string|min:8',
        ]);

        $users->name = $request->name;
        $users->email = $request->email;
        if ($request->password) {

            $users->password = Hash::make($request->password);
        }
        $img_name = '';
        $img_path = '';
        $title = $users->image;
        if ($request->file('image')) {
            $img_file = $request->file('image');
            $img_name = 'image' . Str::lower(Str::random(9)) . '.' . $img_file->getClientOriginalExtension();
            $img_path = 'content/upload/probonolawyers/';
            $success = $img_file->move($img_path, $img_name);
            $title = $img_path . $img_name;
        }
        $users->image = $title;
        $users->save();
        return back()->with('status', 'User Updated Successfully');
    }

    public function questions()
    {
        $questions = AskQuestion::latest()->get();
        return view('backend.pages.questions', compact('questions'));
    }
    public function contacts()
    {
        $contacts = Contact::latest()->get();
        return view('backend.pages.contacts', compact('contacts'));
    }
}
