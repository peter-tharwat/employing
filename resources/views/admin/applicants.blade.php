@extends('adminheader.header')

@section('content')
     <div class="col-xs-12 effect-content" style="padding: 0px;"  >

            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">عرض كافة المتقدمين</span>  
                            <form method="POST" action="/applicant/destroy" style="display: inline-block;margin: 0px" id="removeapplicantform">
                              {{ csrf_field()}}
                              <input type="hidden" name="id" value="" id="removeid">
                              
                            <span class="hidden-sm" style="padding: 3px;display: inline-block; border:1px solid #13c4a5;background: #f2fffd;opacity: 0;" id="removealert">حذف ؟
                              <span  style="padding-right: 50px;">

                                 {{-- <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5;margin: 0px 0px; ">
                                <span class="fa fa-times" style="width: 15px;padding: 0px 3px;color: #f93885"></span>
                                </span> --}} 
                                 <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5; color: #13c4a5 ;cursor:pointer" onclick="$('#removeapplicantform').submit();">
                                  <span class="fa fa-check" style="width: 15px;padding: 0px 1px" ></span>
                                 </span>

                                
                              </span>
                              </form>
                              

                            </span>   
                            

                        </div>
                        <div style="padding: 0px" class="col-xs-2 ">
                          <form method="get" action="/dashboard/applicant/search">
                            
                         
                          <div class=" navbar-form pull-left shift" style="padding: 0px;margin: 0px;">
                            <i class="fa fa-search text-muted"></i> <input class="input-sm form-control" placeholder="بحث" type="text" style="border:1px solid #13c4a5!important;background: #f2fffd" name="search">
                          </div>
                           </form>
                          
                        </div>

                       
                         
                    </header>
                    <div class="panel-body" style=" padding: 0px;">
                       <div class="col-xs-12" style="padding: 0px;overflow: auto;">
                           <table class="table" style="padding: 0px;">
                               <thead class="thead" style="background: #f2fffd;padding: 5px ">
                                   <tr>
                                       <td>كود</td>
                                       <td>عنوان الوظيفة</td>
                                       <td>حالة التقدم</td>
                                       <td>اسم المتقدم</td>
                                       <td>عملية</td>
                                   </tr>
                               </thead>
                               <tbody>

                                @foreach($applicant as $myapplicant)
                                  <tr>
                                     <td>{{  $myapplicant->id }}</td>
                                     <td>{{  \app\Http\Controllers\AdminController::getJobNameById($myapplicant->job_id) }} </td>

                                     <td>
                                       {{  $myapplicant->job_status }}
                                     </td>

                                     <td>
                                      <a href="/dashboard/user/{{$myapplicant->user_id}}/show">
                                      {{  \app\Http\Controllers\AdminController::getUserNameById($myapplicant->user_id) }}
                                      </a>
                                    </td>
                                     <td>
                                      
                                      <a  style="cursor: pointer;" data-toggle="modal" data-target=".bs-example-modal-lg{{  $myapplicant->id }}">
                                        <span class="fa fa-search" style="color: #13c4a5"></span>
                                      </a>



 
                             

                                      <div class="modal fade bs-example-modal-lg{{  $myapplicant->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">
                                       
                                             
                                               <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="gridSystemModalLabel">{{  \app\Http\Controllers\AdminController::getJobNameById($myapplicant->job_id) }}</h4>
                                                  </div>
                                                  <div class="modal-body row">
                                                      
                                                    <?php $user=\App\User::where('id',$myapplicant->user_id)->get()->first(); ?>
                                                  <div class="col-xs-12 " style="padding:2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       الاسم 
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['name']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       البريد الالكتروني
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['email']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       تاريخ التسجيل
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['created_at']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       تاريخ التقديم
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$myapplicant->created_at}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12">
                                                    <hr>
                                                  </div>

                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       الجنس
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['sex']}}
                                                     </div>
                                                  </div>

                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       رقم الهاتف
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['phone']}}
                                                     </div>
                                                  </div>

                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       حالة الاقامة
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['location_status']}}
                                                     </div>
                                                  </div>

                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       نوع الدولة
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['country_type']}}
                                                     </div>
                                                  </div>

                                                  
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       الدولة  
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['country']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       المدينة
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['city']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       ملاحظات
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['details']}}
                                                     </div>
                                                  </div>

                                                  <div class="col-xs-12">
                                                    <hr>
                                                  </div>


                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       المؤهل
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['qualification']}}
                                                     </div>
                                                  </div>

                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       التخصص
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['specification']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       اسم الجامعة
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['university_name']}}
                                                     </div>
                                                  </div>

                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       دولة الجامعة
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['graduation_country']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       المعدل
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['gpa']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       نظام الدرجات
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['degrees_type']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       عام التخرج
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['graduation_year']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       دولة التخرج
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['graduation_country']}}
                                                     </div>
                                                  </div>
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       ملاحظات
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['details2']}}
                                                     </div>
                                                  </div>

                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       لدية خبرة ?
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['has_exp']}}
                                                     </div>
                                                  </div>





                                                  <!--start -->
                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       لدية خبرة ?
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       {{$user['has_exp']}}
                                                     </div>
                                                  </div>
                                                  <!--end -->

                                                  <div class="col-xs-12">
                                                    <hr>
                                                  </div>

                                                  <div class="col-xs-12 " style="padding: 2px 0px;" >
                                                     <div class="col-xs-5 col-sm-4 col-md-2  text-left"> 
                                                       السيرة الذاتية
                                                     </div>
                                                     <div class="col-xs-7 col-sm-8 col-md-10"> 
                                                       <a href="#">
                                                         هنا
                                                       </a>
                                                     </div>
                                                  </div> 








                                                  







 
                                                   
                                               
                                                 </div>
                                                  <div class="modal-footer">
                                                
                                                    <button type="button" class="btn btn-info btn-xs">Save changes</button>
                                                  </div>
                                                </div><!-- /.modal-content -->

                                          
                                        </div>
                                      </div>

                                      
                            

                                   

                                     </td>
                                  </tr>          
                                @endforeach
                                        

                                    
  
                               </tbody>


                           </table>
                           {{ $applicant->links() }}
                       </div>
                    </div>
                </section> 
            </div>
         
      
     </div>
@endsection