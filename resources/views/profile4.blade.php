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


<form method="POST" action="/profile4"  enctype="multipart/form-data">
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
                        <h6 style="color: #444;font-family: 'Cairo';"><span class="fa fa-user" style="padding: 0px 5px;color: #13c4a5"></span> إرفاق ملفات</h6>
                        <div style="height: 1px; background: #13c4a5;"></div>

                    </h3>
                  </div>
                  <div class="panel-body" style="padding-bottom: 50px">
                    <div class="col-xs-12 col-sm-12 col-md-10">

 
                        @if(\Auth::user()->pdf_url!="")
                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                             سيرتك الذاتية
                            </div>
                            <div class="col-xs-9">
                                <a href="{{url('files/'.Auth::user()->pdf_url)}}" target="_blank">
                                    هنا
                                </a>
                            </div>
                        </div>
                        @endif

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                            <?php if(\Auth::user()->pef_url!="") echo "تغيير"; ?> السيرة الذاتية
                            </div>
                            <div class="col-xs-9">
                              <input type="file" name="file" class="form-control" >
                            </div>
                        </div>
                     
                    </div>
 

                    <button style="position: absolute;bottom: 0px;width: 180px;height: 35px;background: #2681c6;left: 0px;border-bottom-left-radius: inherit;color: #fff;padding: 5px;cursor: pointer;color:#fff ; box-shadow: none;border:none;" class="text-center"> 

                         
                             حفظ وانتهاء
                         
                   
                    </button>



                  </div>
                </div>


        
</div>


</form>
 

 <script type="text/javascript">
     $('input[name="country_type"]').change(function(){
        if($(this).val()=='saodi')
        {
            $('.country_class').fadeOut(0);
            $('.city_class').fadeIn(0);
        }
        else
        {
            $('.country_class').fadeIn(0);
            $('.city_class').fadeOut(0);
        }
         

     });
 </script>

@if(\Auth::user()->country_type!="saodi")
 <script type="text/javascript">
    setTimeout(function(){ 
         $('input:radio[name="country_type"]').filter('[value=out_saodi]').prop('checked', true); 
         $('.country_class').fadeIn(0);
         $('.city_class').fadeOut(0);
    }, 300);
 </script>
@endif
@endsection