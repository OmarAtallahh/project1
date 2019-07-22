<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\report;

class MainController extends Controller
{
  // public function index()
  // {
  //     return view("main.HomePage");
  // }

  public function tow()
  {
      return view("main.about");
  }

  // public function three()
  // {
  //     return view("main.HomePage3");
  // }
  public function four()
  {
      return view("main.TestData");
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
