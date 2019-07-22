<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\country;
use App\patient;
use Session;

class DoctorController extends Controller
{

    public function index()
    {
        $patients = patient::paginate(4);
        return view("main.patients",compact("patients"));
    }   

    public function search()
    {
      $q=request()["q"];
      $patients = patient::where("id","like","%$q%")->paginate(4);
      return view("main.patients",compact("patients","q"));
    }

    public function create()
    {
      $countries = country::all();
      return view("main.create",compact("countries"));
    }




    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'email' => 'required|max:50|email',
            'password' => 'required|max:50',
            'country_id' => 'required',
            'job_id' => 'required',
            'phone_number' => 'required',
            'hospital_name' => 'required',
        ]);

        // DB::table("doctors")->insert([
        //   "first_name"=>$request["first_name"],
        //   "last_name"=>$request["last_name"],
        //   "email"=>$request["email"],
        //   "password"=>$request["password"],
        //   "country_id"=>$request["country_id"],
        //   "job_id"=>$request["job_id"],
        //   "phone_number"=>$request["phone_number"],
        //   "hospital_name"=>$request["hospital_name"],

       $doctors = new doctor();
       $doctors->first_name = $request["first_name"];
       $doctors->last_name = $request["last_name"];
       $doctors->email = $request["email"];
       $doctors->country_id = $request["country_id"];
       $doctors->password = $request["password"];
       $doctors->job_id = $request["job_id"];
       $doctors->phone_number = $request["phone_number"];
       $doctors->hospital_name = $request["hospital_name"];
       $doctors->save();

     Session::flash("msg","s: Doctor Account created successfully");
     return redirect("/doctor");
    }
              
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)// show patient info
    {
      $patient = patient::find($id);
       if($patient == NULL)

       {
         return redirect("/doctors");
            }
            return view("main.show",compact("patient"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

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
      
      $patient = patient::find($id);
      $patient->delete();

      Session::flash("msg","w: patient was deleted successfully");
      return redirect("/doctor");

    }
}
