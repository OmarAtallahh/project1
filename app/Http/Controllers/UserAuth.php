<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Illuminate\Http\Request;

class UserAuth extends Controller {

	function getRegister(Request $request) {
		return view('main.register');
	}

	function getDoctorRegister(Request $request) {

		return view('main.doctor_register');
	}

	function register(Request $request) {

		$rules = [
			'name' => 'required|required|min:3',
			'email' => 'required|required|min:3',
			'password' => 'required|min:6|max:20',
			'confirmed_password' => 'same:password',
		];

		// Validate Data
		$data = request()->validate($rules);

		$data['password'] = bcrypt($data['password']);

		$user = User::create($data);

		auth('web')->login($user);

		return redirect('/main/UserMain');
	}

	function doctor_register(Request $request) {

		$rules = [
			'first_name' => 'required|required|min:3',
			'last_name' => 'required|required|min:3',
			'email' => 'required|unique:doctors,email',
			'phone_number' => 'required',
			'hospital_name' => 'required',
			'section' => 'required',
			'password' => 'required|min:6|max:20',
			'confirmed_password' => 'same:password',

		];

		// Validate Data
		$data = request()->validate($rules);

		$data['password'] = bcrypt($data['password']);

		$user = Doctor::create($data);

		auth('doctor')->login($user);

		return redirect('/main/UserMain');
	}

	function getLogin(Request $request) {
		return view('main.login');
	}

	function login(Request $request) {

		$email = $request->email;

		$user = User::whereEmail($email)->first();

		if ($user and Hash::check($request->password, $user->password)) {

			auth('web')->login($user);
			return redirect('/main/UserMain')->with('success', 'Logged IN');
		}

		$doctor = Doctor::whereEmail($email)->first();

		if ($doctor and Hash::check($request->password, $doctor->password)) {

			auth('doctor')->login($doctor);
			return redirect('/articles')->with('success', 'Logged IN');
		}

		return back()->with('error', 'Invalid Data');

	}

	public function logout() {

		auth('doctor')->logout();
		auth('web')->logout();

		return view('main.index');

	}
}