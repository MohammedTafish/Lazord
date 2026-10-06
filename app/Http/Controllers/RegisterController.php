<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request ){
        $validated = $request->validate([
            'first_name'  => 'required',
            'last_name'   => 'required',
            'email'       => 'required',
            'phone'       => 'required',
            'clinic_name' => 'required',
            'role'        => 'nullable',
            'password'    => 'required',
        ]);

        $clinic = Clinic::create([
            'name'    => $validated['clinic_name'],
            'phone'   => $validated['phone'],
            'address' => 'غير محدد',
        ]);

        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name'  => $validated['last_name'],
            'name'       => $validated['first_name'] . ' ' . $validated['last_name'],
            'email'      => $validated['email'],
            'password'   => Hash::make($validated['password']),
            'role'       => $validated['role'] ?? 'dentist',
            'clincs_id'  => $clinic->id,
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('success' , 'تم تسجيل عيادتك وحسابك بنجاح!');
    }
}