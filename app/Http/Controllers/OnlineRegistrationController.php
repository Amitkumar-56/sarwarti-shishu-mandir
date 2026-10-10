<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineRegistration;

class OnlineRegistrationController extends Controller
{
    public function store(Request $request)
    {
        $registration = OnlineRegistration::create([
            'registration_no' => 'REG-' . time(),
            'student_name_hi' => $request->input('student_name_hi'),
            'student_name_en' => $request->input('student_name_en'),
            'father_name' => $request->input('father_name'),
            'mother_name' => $request->input('mother_name'),
            'mobile_no' => $request->input('father_phone') ?? $request->input('mother_phone'),
            'admission_class' => $request->input('class_admission'),
            'dob' => $request->input('dob'),
            'form_data' => $request->except(['_token']),
        ]);

        return redirect()->back()->with('success', 'Registration submitted successfully! You can now print your form.')->with('submitted_data', $request->except(['_token']));
    }
}
