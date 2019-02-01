<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;

class ApplicantController extends Controller
{
 
    public function index()
    {
    /*return '<a href="/'.storage_path().'/text.text"'.'link'.'</a>' ;*/
        $job=\App\Job::where('start_date','<',date('Y-m-d  H:i:s') )->where('end_date','>',date('Y-m-d  H:i:s'))->get(); 
        $arrayName = array('job' =>$job );
        return view('index',$arrayName);
         
    }   


   

 
 
 
    public function show($id)
    {
        $user= \App\User::where('id',$id)->get();
        return $user;
    }



    public function search(Request $request)
    {
        $user = \App\User::where('email',$request->search)
         ->orWhere('name', 'like', '%' .$request->search. '%')->paginate(20);


        $arrayName = array('user' => $user  );
        return view('user.viewallusers',$arrayName  );
    }



 
    

    public function profile1(Request $request)
    {
        $id=\Auth::user()->id;

        
            $request->validate(
                [
                    'sex'=>'nullable|string|max:5',
                    'phone'=>'nullable|numeric|max:9999999999999999999',
                    'country_type'=>'string',
                    'location_status'=>'nullable|string',
                    'details1'=>'nullable|string',
                    'country'=>'nullable|string',
                    'city'=>'nullable|string',
                     
                ]
            );
       

        $user =   \App\User::where('id',$id)
        ->update(
            [
                'sex' => $request->sex,
                'phone' => $request->phone,
                'city' => $request->city,
                'country' => $request->country,
                'location_status' => $request->location_status,
                'details1' => $request->details1,
                'country_type'=>$request->country_type,
                'personal_info_step'=>'1'
            ]
        );


        return redirect('/profile2')->with('data', ['alert'=>'تم الحفظ بنجاح ','alert-type'=>'success']);

    }



    public function profile2(Request $request)
    {

        $id=\Auth::user()->id;

        
            $request->validate(
                [
                    'qualification'=>'nullable|string',
                    'specification'=>'nullable|string',
                    'university_name'=>'nullable|string',
                    'graduation_country'=>'nullable|string',
                    'gpa'=>'nullable|numeric',
                    'degrees_type'=>'nullable|numeric',
                    'graduation_year'=>'nullable|numeric',
                    'details2'=>'nullable|string',
                     
                ]
            );
       

        $user =   \App\User::where('id',$id)
        ->update(
            [
                'qualification' => $request->qualification,
                'specification' => $request->specification,
                'university_name' => $request->university_name,
                'graduation_country' => $request->graduation_country,
                'gpa' => $request->gpa,
                'degrees_type' => $request->degrees_type,
                'graduation_year'=>$request->graduation_year,
                'details2'=>$request->details2,
                'qualification_step'=>'1'
            ]
        );

        return redirect('/profile3')->with('data', ['alert'=>'تم الحفظ بنجاح ','alert-type'=>'success']);

    }










    





    public function profile3(Request $request)
    {

        $id=\Auth::user()->id;


        $user =   \App\User::where('id',$id)
        ->update([
                    'has_exp' => $request->has_exp,
                    'exp_step'=>'1'
                ]);




        
            $request->validate(
                [
                    'has_exp'=>'nullable|string',


                    "job_title"          => "nullable|array",
                    "university_name"    => "nullable|array",
                    "start_date_month"   => "nullable|array",
                    "end_date_month"     => "nullable|array",
                    "start_date_year"    => "nullable|array",
                    "end_date_year"      => "nullable|array",


                    'job_title.*'        =>'nullable|string',
                    'university_name.*'  =>'nullable|string',
                    'start_date_month.*' =>'nullable|string',
                    'end_date_month.*'   =>'nullable|string',
                    'start_date_year.*'  =>'nullable|string',
                    'end_date_year.*'    =>'nullable|string',

                    
                     
                ]
            );
       
        $Exp=\App\Exp::where('user_id',$id)->delete();

        
            for($i=0;is_array($request->job_title)&&$i<count($request->job_title)&&$request->has_exp=='on';$i++)
            {
                $exp1=new \App\Exp;
                $exp1->user_id=$id;
                $exp1->job_title=$request->job_title[$i];
                $exp1->target_name=$request->university_name[$i]; 
                $exp1->start_date_month=$request->start_date_month[$i]; 
                $exp1->start_date_year=$request->start_date_year[$i];
                $exp1->end_date_month=$request->end_date_month[$i];
                $exp1->end_date_year=$request->end_date_year[$i];
                $exp1->details='';
                $exp1->save();
 
     
            }

        
    


        return redirect('/profile4')->with('data', ['alert'=>'تم الحفظ بنجاح ','alert-type'=>'success']);

    }

    public function profile4(Request $request)
    {

        $id=\Auth::user()->id;


 

        $file;

        if(isset($request->file) && $request->file!='' )
        {
            $file =rand(100000,999999). time().'.'. $request->file->getClientOriginalExtension();
            /*$request->file('file')->storeAs('/storage/files/', $file); 
            */
            $request->file->move('files', $file);
        } 
        else $file =""; 



       /* $request->file('file')->storeAs('/storage/files/', $file); 
*/
        /*fopen*/
        Storage::put('files/', '');
       /* File::put('/storate/'.$file,'');*/
      /* $fp = fopen(,'wb');
        fwrite($fp,'');
        fclose($fp);*/




 

        if($request->file!='')
        {
            $user =   \App\User::where('id',$id)
        ->update(
            [
                'pdf_url' => $file,
            ]);
        }

                            




        $user =   \App\User::where('id',$id)
        ->update(
            [
                'files_step'=>'1'
            ]
        );


         


        return redirect('/')->with('data', ['alert'=>'تم الحفظ بنجاح ','alert-type'=>'success']);

    }




 
 
    public function destroy(Request $request)
    {     
        $user =  \App\User::where('id',$request->id)->delete(); 
        return redirect('/user')->with('data', ['alert'=>'تم حذف العميل بنجاح','alert-type'=>'success']);
    }

    public static function farOrFas($id)
    {   

        $x=\App\Love::where('job_id',$id)->where('user_id',\Auth::user()->id)->get()->first();
        if(is_object($x))
            return 1;
        return 0;
    }
    

    public static function updatelove(Request $request)
    {     

 
        if($request->status=="close")
        {
              
           
             $love =  \App\Love::where('job_id',$request->id)->where('user_id',\Auth::user()->id)->delete();
             return 1;


        }
        else if($request->status=="open")
        {
             
            $create=new \App\Love;
            $create->job_id=$request->id;
            $create->user_id=\Auth::user()->id;
            $create->save();
            return 1;
           
        }


        return 0;
    }
    

    public static function appling(Request $request){

        $create=new \App\Application;
        $create->job_id=$request->id;
        $create->user_id=\Auth::user()->id;
        $create->job_status='0';
        $create->save();
        return redirect('/')->with('data', ['alert'=>'تم التقدم إلي الوظيفة بنجاح ','alert-type'=>'success']);
 

    }
    //  public function details($id)
    // {
    //     $user=\App\User::where('id',$id)->get()->first();
    //     $deal= \App\Deal::orderBy('id', 'DESC')->where('user_id',$id)->get();
    //     $arrayName=array('user'=>$user,'deal'=>$deal);
    //    return view('user.userdeal',$arrayName);
    // }

}
