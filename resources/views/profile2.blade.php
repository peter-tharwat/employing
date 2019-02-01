@extends('layouts.app')
@section('content')





<style type="text/css">
    input,textarea,select
    {
        border-radius: 0px!important;
        box-shadow: none!important;

    }
    select 
    {
         padding: 0px!important;
    }
    input:focus,textarea:focus
    {
        background: #ebf8ff!important
    }


</style>


<form method="post" action="/profile2">
   @csrf
<div class="col-xs-12"  >
    <div class="container">

      
        <div class="col-xs-12 col-sm-12 col-md-3 " >
            <div class="col-xs-12 text-center" style="padding: 15px 0px ">
                 <img src="http://pngimages.net/sites/default/files/users--blue-flag-png-image-100720.png" style=" display: inline-block;padding: 20px;max-width: 170px;">
                <div class="col-xs-12">
                    <h6><span class="fa fa-user" style="padding-left: 7px"></span>
                  
                        {{ Auth::user()->name }}

                 </h6>
                    <h6><span class="fa fa-envelope" style="padding-left: 7px"></span>  

                        {{ Auth::user()->email }}
                    </h6>


                    <div class="col-xs-12" style="margin-top: 5px;margin-bottom: 5px;border:1px solid #ddd;border-radius: 5px;">
                        <div class="col-xs-12">
                            تاريخ الانشاء
                        </div>
                        <div class="col-xs-12">
                           <span class="far fa-clock" style="padding-left: 7px"></span>  {{ Auth::user()->created_at }}
                        </div>
                    </div>

                    <div class="col-xs-12" style="margin-top: 5px;margin-bottom: 5px;border:1px solid #ddd;border-radius: 5px;">
                        <div class="col-xs-12">
                             تاريخ آخر تعديل
                        </div>
                        <div class="col-xs-12">
                           <span class="far fa-clock" style="padding-left: 7px"></span>  {{ Auth::user()->updated_at }}
                        </div>
                    </div>

              

                   
                </div>
            </div>
        </div>



        


          @include('navuser')



            <div class="panel panel-default col-xs-12 col-sm-12 col-md-9">
                  <div class="panel-heading" style="border:none;">
                    <h3 class="panel-title">
                        <h6 style="color: #444;font-family: 'Cairo';"><span class="fa fa-user" style="padding: 0px 5px;color: #13c4a5"></span> المؤهل  </h6>
                        <div style="height: 1px; background: #13c4a5;"></div>

                    </h3>
                  </div>
                  <div class="panel-body" style="padding-bottom: 50px">
                    <div class="col-xs-12 col-sm-12 col-md-10">

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              المؤهل
                            </div>
                            <div class="col-xs-9">
                            
                            <select name="qualification" id="qualification0" class="form-control" style="border-radius: 0px;box-shadow: none;padding: 0px;" >
                                <option value="{{Auth::user()->qualification}}">{{Auth::user()->qualification}}</option>
                                <option value="ثانوي">ثانوي</option>
                                <option value="دبلوم">دبلوم</option>
                                <option value="بكالوريوس">بكالوريوس</option>
                                <option value="ماجستير">ماجستير</option>
                                <option value="دكتوراه">دكتوراه</option>
                                <option value="زمالة<">زمالة</option>
                              </select>

                               
                            </div>
                        </div>


                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              التخصص
                            </div>
                            <div class="col-xs-9">
                              <input type="" name="specification" class="form-control" value="{{Auth::user()->specification}}">
                            </div>
                        </div>

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              اسم الجامعة
                            </div>
                            <div class="col-xs-9">
                              <input type="" name="university_name" class="form-control" value="{{Auth::user()->university_name}}">
                            </div>
                        </div>

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              دولة الجامعة
                            </div>
                            <div class="col-xs-9">
                              <input type="" name="graduation_country" class="form-control" value="{{Auth::user()->graduation_country}}">
                            </div>
                        </div>
                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              المعدل
                            </div>
                            <div class="col-xs-9">
                              <input type="" name="gpa" class="form-control" value="{{Auth::user()->gpa}}">
                            </div>
                        </div>



                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              نظام الدرجات
                            </div>
                            <div class="col-xs-9">
                            
                            <select name="degrees_type" id="degrees_type" class="form-control" style="border-radius: 0px;box-shadow: none;padding: 0px;" >
                                <option value="{{Auth::user()->degrees_type}}">{{Auth::user()->degrees_type}}</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="100">100</option>
                            
                              </select>

                               
                            </div>
                        </div>







                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              عام التخرج
                            </div>
                            <div class="col-xs-9">
                            
                            <select name="graduation_year" id="graduation_year" class="form-control" >
                                <option value="{{Auth::user()->graduation_year}}">{{Auth::user()->graduation_year}}</option>
                                <option value="1974">1974  </option>
                                <option value="1975">1975  </option>
                                <option value="1976">1976  </option>
                                <option value="1977">1977  </option>
                                <option value="1978">1978  </option>
                                <option value="1979">1979  </option>
                                <option value="1980">1980  </option>
                                <option value="1981">1981  </option>
                                <option value="1982">1982  </option>
                                <option value="1983">1983  </option>
                                <option value="1984">1984  </option>
                                <option value="1985">1985  </option>
                                <option value="1986">1986  </option>
                                <option value="1987">1987  </option>
                                <option value="1988">1988  </option>
                                <option value="1989">1989  </option>
                                <option value="1990">1990  </option>
                                <option value="1991">1991  </option>
                                <option value="1992">1992  </option>
                                <option value="1993">1993  </option>
                                <option value="1994">1994  </option>
                                <option value="1995">1995  </option>
                                <option value="1996">1996  </option>
                                <option value="1997">1997  </option>
                                <option value="1998">1998  </option>
                                <option value="1999">1999  </option>
                                <option value="2000">2000  </option>
                                <option value="2001">2001  </option>
                                <option value="2002">2002  </option>
                                <option value="2003">2003  </option>
                                <option value="2004">2004  </option>
                                <option value="2005">2005  </option>
                                <option value="2006">2006  </option>
                                <option value="2007">2007  </option>
                                <option value="2008">2008  </option>
                                <option value="2009">2009  </option>
                                <option value="2010">2010  </option>
                                <option value="2011">2011  </option>
                                <option value="2012">2012  </option>
                                <option value="2013">2013  </option>
                                <option value="2014">2014  </option>
                                <option value="2015">2015  </option>
                                <option value="2016">2016  </option>
                                <option value="2017">2017  </option>
                                <option value="2018">2018  </option>
                                <option value="2019">2019  </option>
                                <option value="2020">2020  </option>
                                <option value="2021">2021  </option>
                                <option value="2022">2022  </option>
                                <option value="2023">2023  </option>
                              </select>
    
                            </div>
                        </div>



 








                       
                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              ملاحظات
                            </div>
                            <div class="col-xs-9">
                              <textarea type="" name="details2" class="form-control" style="min-height: 250px;max-width: 100%;min-width: 100%;">{{Auth::user()->details2}}</textarea>
                            </div>

                        </div>
                    </div>















                    <button style="position: absolute;bottom: 0px;width: 180px;height: 35px;background: #2ab27b;left: 0px;border-bottom-left-radius: inherit;color: #fff;padding: 5px;cursor: pointer;color:#fff ; box-shadow: none;border:none;" class="text-center"> 

                         
                             حفظ ومتابعة
                         
                   
                    </button>



                  </div>
                </div>


        
</div>
 </div>
</form>
@endsection