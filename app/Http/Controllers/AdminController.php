<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Doctor;
use App\country;
use App\report;

class AdminController extends Controller
{

     public function index()
     {
       // $doctors = DB::table("doctors")->get();//select * from doctors
       $doctors = Doctor::paginate(4);
       return view("admin.index",compact("doctors"));
     }
    public function search()
    {
      $q=request()["q"];
      $doctors = Doctor::where("id","like","%$q%")->paginate(4);
      return view("admin.index",compact("doctors","q"));
    }

      public function problems()
      {
        // $doctors = DB::table("doctors")->get();//select * from doctors
        $reports = report::all();
        return view("admin.reports",compact("reports"));
      }

      

    public function create()
    {
      // $countries = DB::table("apps_countries")->get();
      $countries = country::all();
      return view("admin.create",compact("countries"));
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'email' => 'required|max:50|email',
            'password' => 'required|max:100',
            'section' => 'required',
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

       $doctors = new Doctor();
       $doctors->first_name = $request["first_name"];
       $doctors->last_name = $request["last_name"];
       $doctors->email = $request["email"];
       $doctors->password = bcrypt($request["password"]);
       $doctors->section = $request["section"];
       $doctors->phone_number = $request["phone_number"];
       $doctors->hospital_name = $request["hospital_name"];
       $doctors->save();

     Session::flash("msg","s: تم إضافة حساب طبيب جديد بنجاح ");
     return redirect("/admin/admin/create");
    }
      

    public function show($id)  // show doctor info
    {
      //$doctor = DB::table("doctors")->find($id);
    //$account = DB::table("account")->where("id",$id)->first();
      $doctor = Doctor::find($id);
       if($doctor == NULL)
       {
         return redirect("/admin");
            }
            return view("admin.show",compact("doctor"));

    }



      public function edit($id)
      {
        // $doctor = DB::table("doctors")->find($id);
        $doctor = doctor::find($id);
       if($doctor == NULL)
       {
         return redirect("/admin");
            }
        // $countries = DB::table("apps_countries")->get();   //apps_countries name of the real table on database
        $countries = country::all();   // country is name of the model that include the real name of database
        return view("admin.edit",compact("countries","doctor"));
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
      $request->validate([
          'first_name' => 'required|max:20',
          'last_name' => 'required|max:20',
          'email' => 'required|max:50|email',
          'password' => 'required|max:100',
          'section' => 'required',
          'phone_number' => 'required',
          'hospital_name' => 'required',
      ]);

      $doctors = Doctor::find($id);
      $doctors->first_name = $request["first_name"];
      $doctors->last_name = $request["last_name"];
      $doctors->email = $request["email"];
      $doctors->password = bcrypt($request["password"]);
      $doctors->section = $request["section"];
      $doctors->phone_number = $request["phone_number"];
      $doctors->hospital_name = $request["hospital_name"];
      $doctors->save();

   Session::flash("msg","s: تم تحديث البيانات بنجاح");
   return redirect("/admin/admin");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
      {
      // DB::table("doctors")->where("id",$id)->delete();
      $doctors = Doctor::find($id);
      $doctors->delete();

      Session::flash("msg","w: Doctor was deleted successfully");
      return redirect("/admin/admin");
      }
  }
