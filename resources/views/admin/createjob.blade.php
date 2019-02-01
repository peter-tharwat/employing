@extends('adminheader.header')

@section('content')


     <div class="col-xs-12 effect-content" style="padding: 0px;"  >

            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">اضافة وظيفة جديدة</span>  
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
                        

                       
                         
                    </header>





                    <form method="POST" action="/dashboard/job/create" >
                      @csrf
                    <div class="panel-body" style=" padding: 0px;">
                       <div class="col-xs-12" style="padding: 0px;overflow: auto;">
                            <div class="col-xs-12 col-sm-6" style="padding-top: 50px;padding-bottom: 30px;">
                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  عنوان الوظيفة
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10">
                                    <input type="" name="title" class="form-control">
                                  </div>
                                </div>
                              </div>

                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  نوع الوظيفة
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10">
                                    <select name="type" class="form-control">
                                      <option value="V">تطوع</option>
                                      <option value="F">دوام كامل</option>
                                      <option value="P">دوام جزئي</option>
                                      <option value="T">تدريب تعاوني</option>
                                    </select>
                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  التخصص
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10">
                                    <select name="specification" class="form-control">

                                    <?php $joboption = \App\Specification::get(); ?>
                                      @foreach($joboption as $myjoboption )
                                        <option >{{$myjoboption->name}}</option>
                                      @endforeach
                                    </select>
                                    
                                  </div>
                                </div>
                              </div>


                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  الوصف
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10">
                                    <textarea type="" name="desc" class="form-control" style="border-radius: 0px;box-shadow: none;max-width: 100%;min-width: 100%;min-height: 250px;"></textarea>
                                  </div>
                                </div>
                              </div>


                               
                            </div>
                            <div class="col-xs-12 col-sm-6" style="padding-top: 50px;padding-bottom: 30px;">


                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  ملاحظات
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10">
                                    <textarea type="" name="details" class="form-control" style="border-radius: 0px;box-shadow: none;max-width: 100%;min-width: 100%;min-height: 150px;"></textarea>
                                  </div>
                                </div>
                              </div>

                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  تاريخ البداية
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10">
                                    <input type="date" name="start_date" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="col-xs-12" style="padding-top: 15px">
                                <div class="col-xs-3 text-left" style="padding: 5px 0px ">
                                  تاريخ النهاية
                                </div>
                                <div class="col-xs-9"> 
                                  <div class="col-xs-10">
                                    <input type="date" name="end_date" class="form-control">
                                  </div>
                                </div>
                              </div>









                              
                            </div>

                            <div class="col-xs-12 text-left" style="margin-bottom: 40px;">
                              <div class="col-xs-6">
                                
                              </div>
                              <div class="col-xs-6">
                                <div class="col-xs-3">
                                  
                                </div>
                                <div class="col-xs-9">
                                  <div class="col-xs-10 text-left">
                                    <button class="btn btn-secondary" type="reset">تفريغ الخانات</button>
                                    <button class="btn btn-info">حفظ</button>
                                  </div>
                                </div>
                              </div>

                             
                               
                            </div>
                       </div>
                    </div>
                    </form>

                </section> 
            </div>
         
      
     </div>

   
@endsection