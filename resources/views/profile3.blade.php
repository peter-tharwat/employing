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


<form method="POST" action="/profile3">
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
                        <h6 style="color: #444;font-family: 'Cairo';"><span class="fa fa-user" style="padding: 0px 5px;color: #13c4a5"></span> سنوات الخبرة  </h6>
                        <div style="height: 1px; background: #13c4a5;"></div>

                    </h3>
                  </div>
                  <div class="panel-body " style="padding-bottom: 50px">


                    <div class="col-xs-12 " style="padding: 8px 0px ;">

                      <div class="col-xs-12 col-sm-12 col-md-10" >
                        <div class="col-xs-10">
                          <div class="col-xs-3 text-left">
                            لدي خبرة
                          </div>
                          <div class="col-xs-1">
                              <input type="checkbox"   style="width: 20px;height: 20px;"
                              class="has-exp-btn" name="has_exp" > 
                          </div>

                          <div class="col-xs-4">
                            <a class="more-exp" style="cursor: pointer;display: none;">+اضافة</a>
                              
                          </div>

                        </div>
                      </div>
                    </div>
                     

                    <?php $exp = \App\Exp::get(); ?>
                    <div class="col-xs-12 exp-class">
                    @foreach($exp as $myexp)
                    <div class="col-xs-12 has-exp" style="padding: 8px 0px ; ">

                      <div class="col-xs-12 col-sm-12 col-md-10" >

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              المسمي الوظيفي
                            </div>
                            <div class="col-xs-9">
                              <input type="" name="job_title[]" class="form-control" value="{{$myexp->job_title}}">
                            </div>
                        </div>


                        
                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              اسم الجهة
                            </div>
                            <div class="col-xs-9">
                              <input type="" name="university_name[]" class="form-control" value="{{$myexp->target_name}}">
                            </div>
                        </div>

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                             تاريخ بداية العمل
                            </div>
                            <div class="col-xs-9">
                              <div class="col-xs-5">
                                
                              </div>
                              <div class="col-xs-7" style="padding: 0px">
                                <div class="col-xs-6" style="padding-right: 0px;" >
                                    <select class="form-control" name="start_date_month[]" >
                                        <option value="{{$myexp->start_date_month}}">{{$myexp->start_date_month}}</option>
                                        <?php for($i=1;$i<=12;$i++) echo '<option>'.$i.'</option>'; ?>
                                    </select>
                                </div>
                                <div class="col-xs-6" style="padding-left: 0px;">
                                    <select class="form-control" name="start_date_year[]">
                                        <option value="{{$myexp->start_date_year}}">{{$myexp->start_date_year}}</option>
                                        <?php for($i=1970;$i<2023;$i++) echo '<option>'.$i.'</option>'; ?>
                                    </select>
                                </div>
                              </div>
                              
                            </div>
                        </div>

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                             تاريخ نهاية العمل
                            </div>
                            <div class="col-xs-9">
                              <div class="col-xs-5">
                                
                              </div>
                              <div class="col-xs-7" style="padding: 0px">
                                <div class="col-xs-6" style="padding-right: 0px;" >
                                    <select class="form-control" name="end_date_month[]">
                                        <option  value="{{$myexp->end_date_month}}">{{$myexp->end_date_month}}</option>
                                        <?php for($i=1;$i<=12;$i++) echo '<option>'.$i.'</option>'; ?>

                                        

                                    </select>
                                </div>
                                <div class="col-xs-6" style="padding-left: 0px;">
                                    <select class="form-control" name="end_date_year[]">
                                        <option  value="{{$myexp->end_date_year}}">{{$myexp->end_date_year}}</option>
                                        <?php for($i=1970;$i<2023;$i++) echo '<option>'.$i.'</option>'; ?>

                                    </select>
                                </div>
                              </div>
                              
                            </div>
                        </div>

 
                       
                        
                    </div>

                      
                    </div>
                    @endforeach
                    </div>















                    <button style="position: absolute;bottom: 0px;width: 180px;height: 35px;background: #2ab27b;left: 0px;border-bottom-left-radius: inherit;color: #fff;padding: 5px;cursor: pointer;color:#fff ; box-shadow: none;border:none;" class="text-center"> 

                         
                             حفظ ومتابعة
                         
                   
                    </button>



                  </div>
                </div>


        
</div>
</div>
</form>
 

<script type="text/javascript">
  

   $('.more-exp').click(function(){

        $('.exp-class').append('<div class="col-xs-12 has-exp" style="padding: 8px 0px ;background: #fffdc1;border-bottom:1px solid #f7e401">\
\
          <div class="col-xs-12 col-sm-12 col-md-10" >\
\
            <div class="col-xs-12" style="padding: 6px;">\
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">\
                  المسمي الوظيفي\
                </div>\
                <div class="col-xs-9">\
                  <input type="" name="job_title[]" class="form-control"  >\
                </div>\
            </div>\
\
\
            \
            <div class="col-xs-12" style="padding: 6px;">\
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">\
                  اسم الجهة\
                </div>\
                <div class="col-xs-9">\
                  <input type="" name="university_name[]" class="form-control"  >\
                </div>\
            </div>\
\
            <div class="col-xs-12" style="padding: 6px;">\
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">\
                 تاريخ بداية العمل\
                </div>\
                <div class="col-xs-9">\
                  <div class="col-xs-5">\
                    \
                  </div>\
                  <div class="col-xs-7" style="padding: 0px">\
                    <div class="col-xs-6" style="padding-right: 0px;" >\
                        <select class="form-control" name="start_date_month[]" >\
                            <option  > </option>\
      <?php for($i=1;$i<13;$i++) echo "<option>".$i."</option>"; ?>\
                        </select>\
                    </div>\
                    <div class="col-xs-6" style="padding-left: 0px;">\
                        <select class="form-control" name="start_date_year[]">\
                            <option  > </option>\
      <?php for($i=1970;$i<2023;$i++) echo "<option>".$i."</option>"; ?>\
                        </select>\
                    </div>\
                  </div>\
                  \
                </div>\
            </div>\
\
            <div class="col-xs-12" style="padding: 6px;">\
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">\
                 تاريخ نهاية العمل\
                </div>\
                <div class="col-xs-9">\
                  <div class="col-xs-5">\
                    \
                  </div>\
                  <div class="col-xs-7" style="padding: 0px">\
                    <div class="col-xs-6" style="padding-right: 0px;" >\
                        <select class="form-control" name="end_date_month[]">\
                            <option > </option>\
              <?php for($i=1;$i<13;$i++) echo "<option>".$i."</option>"; ?>\
                        </select>\
                    </div>\
                    <div class="col-xs-6" style="padding-left: 0px;">\
                        <select class="form-control" name="end_date_year[]">\
                            <option > </option>\
              <?php for($i=1970;$i<2023;$i++) echo "<option>".$i."</option>"; ?>\
                        </select>\
                    </div>\
                  </div>\
                  \
                </div>\
            </div>\
\
        </div>\
\
          \
        </div>');


   });


   $('.has-exp-btn').change(function(){

    if($(this).is(':checked'))
    {
      $('.exp-class').fadeIn(0);
      $('.more-exp').fadeIn();
      $('.more-exp').click();

       
    }
    else
    {
      $('.more-exp').fadeOut();
      $('.exp-class').fadeOut();
    }


  });



@if(Auth::user()->has_exp=='on')
setTimeout(function(){
    $('.has-exp-btn').click();
  }, 1000);
@endif

 

</script>
 
@endsection