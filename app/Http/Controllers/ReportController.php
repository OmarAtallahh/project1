<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\report;
use Session;
// doctor dashboard
class ReportController extends Controller
{

    public function index()
    {
        return view("main.createReport");
    }

     public function create()
     {
       // $countries = DB::table("apps_countries")->get();
       $reports = report::all();
       return view("main.createReport",compact("reports"));
     }

     public function store(Request $request)
     {
         $request->validate([
             'report' => 'required|max:500',
         ]);

        $reports = new report();
        $reports->report = $request["report"];
        $reports->save();

      Session::flash("msg","s: Report sent successfully");
      return redirect("/main/createReport");
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
