<?php

namespace App\Http\Controllers;
use Hash;

class MainController extends Controller {
	// public function index()
	// {
	//     return view("main.HomePage");
	// }

	public function tow() {

		return view("main.about");
	}

	// public function three()
	// {
	//     return view("main.HomePage3");
	// }
	public function four() {
		$user = auth('web')->user() ?? auth('doctor')->user();

		return view("main.UserMain", compact('user'));
	}
	public function doctors() {
		return view("main.viewDoctors");
	}

	public function update() {

		$requests = request()->all();
		$request = array_filter($requests);

		if (request()->hasFile('image')) {

			$file_with_ext = request()->file('image')->getClientOriginalName();
			$file_ext = request()->file('image')->getClientOriginalExtension();
			$file_new_name = sha1(str_random(40) . time()) . '.' . $file_ext;
			request()->file('image')->move(public_path() . '/image/', $file_new_name);
			$requests['image'] = $file_new_name;
		}

		if (auth('web')->check()) {

			auth('web')->user()->update($requests);

		} else if (auth('doctor')->check()) {

			auth('doctor')->user()->update($requests);

		}

		return back();

	}

	public function update_password() {

		$data = request()->validate([

			'current_password' => 'required|string|min:3|max:20',
			'new_password' => 'required|string|min:3|max:20',
			'confirmation_password' => 'same:new_password',
		]);

		if (auth('web')->check()) {

			$user = auth('web')->user();

		} else if (auth('doctor')->check()) {

			$user = auth('doctor')->user();

		}

		if (Hash::check($data['current_password'], $user->password)) {

			$user->update(['password' => bcrypt(request('new_password'))]);

		}

		return back();

	}

	// public function interface()
	// {
	//     return view("main.index");
	// }
	// public function problems()
	// {
	//   // $doctors = DB::table("doctors")->get();//select * from doctors
	//   $reports = report::all();
	//   return view("main.reports",compact("reports"));
	// }

	//
	// public function create()
	// {
	//   // $countries = DB::table("apps_countries")->get();
	//   $reports = report::all();
	//   return view("main.create",compact("countries"));
	// }
	//
	// /**
	//  * Store a newly created resource in storage.
	//  *
	//  * @param  \Illuminate\Http\Request  $request
	//  * @return \Illuminate\Http\Response
	//  */
	// public function store(Request $request)
	// {
	//     $request->validate([
	//         'report' => 'required|max:300',
	//     ]);
	//
	//    $reports = new report();
	//    $reports->report = $request["report"];
	//    $reports->save();
	//
	//  Session::flash("msg","s: Doctor Account created successfully");
	//  return redirect("/admin/create");
	// }
}
