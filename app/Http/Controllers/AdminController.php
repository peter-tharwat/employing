<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
 
    public function userIndex()
    {
         $user = \App\User::paginate();
         $arrayName = array('user' => $user );
         /*return $user;*/
         return view('admin.viewusers',$arrayName );

    }


    public function search(Request $request)
    {
        $user = \App\User::where('email',$request->search)
         ->orWhere('name', 'like', '%' .$request->search. '%')->paginate(20);


        $arrayName = array('user' => $user  );
        return view('admin.viewusers',$arrayName );
    }














    public function dashboard(Request $request)
    {
        return view('admin.dashboard');
    }




    public function  applicants(Request $request)
    {
        $app=\App\Application::orderBy('id','DESC')->paginate(50);
        $arrayName = array('applicant' =>$app  );
        return view('admin.applicants',$arrayName);
    }


    public static function  getJobNameById($id)
    {
        $job = \App\Job::where('id',$id)->get()->first();
        return $job['title'];
         
    }


    public static function  getJobDescById($id)
    {
        $job = \App\Job::where('id',$id)->get()->first();
        return $job['desc'];  
    }


    public static function  getUserNameById($id)
    {
        $user = \App\User::where('id',$id)->get()->first();
        return $user['name'];
    }











    public function  indexJob(Request $request)
    {
        $job=\App\Job::orderBy('id', 'DESC')->paginate(50);
        $arrayName = array('job' => $job );
        return view('admin.jobs',$arrayName);
    }
    public function  createJob(Request $request)
    {
        return view('admin.createjob');
    }
    public function  createJobStore(Request $request)
    {
       
 
       
        $job= new \App\Job;
        $job->title=$request->title;
        $job->desc=$request->desc;
        $job->type=$request->type;
        $job->specification=$request->specification;
        $job->end_date=$request->end_date;
        $job->start_date=$request->start_date;
        $job->details=$request->details;
        $job->visibility=$request->visibility;
        $job->save();

        return redirect('/dashboard/job')->with('data', ['alert'=>'تم الحفظ بنجاح ','alert-type'=>'success']);

    
    }

















    public function  indexJobOption(Request $request)
    {
        $joboption=\App\Specification::orderBy('id', 'DESC')->paginate(50);
        $arrayName = array('joboption' => $joboption );
        return view('admin.joboption',$arrayName);
    }
    public function  createJobOption(Request $request)
    {

        return view('admin.createjoboption');
    }
    public function  createJobOptionStore(Request $request)
    {
       
 
       
        $joboption= new \App\Specification;
        $joboption->name=$request->name;
        $joboption->details=$request->details;
        $joboption->save();

        return redirect('/dashboard/joboption')->with('data', ['alert'=>'تم الحفظ بنجاح ','alert-type'=>'success']);

    
    }






    


 /*   public function  indexJobOption(Request $request)
    {
        return view('admin.applicants');
    }
    public function  createJobOption(Request $request)
    {
        return view('admin.applicants');
    }
    public function  createJobOptionStore(Request $request)
    {
        return view('admin.applicants');
    }*/





 
}
