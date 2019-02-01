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


<form method="POST" action="/profile1">
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
                        <h6 style="color: #444;font-family: 'Cairo';"><span class="fa fa-user" style="padding: 0px 5px;color: #13c4a5"></span>  معلومات الشخصية</h6>
                        <div style="height: 1px; background: #13c4a5;"></div>

                    </h3>
                  </div>
                  <div class="panel-body" style="padding-bottom: 50px">
                    <div class="col-xs-12 col-sm-12 col-md-10">

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              الجنس
                            </div>
                            <div class="col-xs-9">
                                <select type="" name="sex" class="form-control" style="border-radius: 0px;box-shadow: none;padding: 0px;">

                                    <option {{Auth::user()->sex}} selected>{{Auth::user()->sex}}</option>
                                    <option>ذكر</option>
                                    <option>انثي</option>
                                </select>
                               
                            </div>
                        </div>


                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              رقم الهاتف
                            </div>
                            <div class="col-xs-9">
                              <input type="" name="phone" class="form-control" value="{{Auth::user()->phone}}">
                            </div>
                        </div>

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              الدولة 
                            </div>
                            <div class="col-xs-9">
                                <div class="col-xs-6">
                                  
                                    <input type="radio" name="country_type" value="saodi" id="saodi"  checked> &nbsp; &nbsp;  
                                    <label for="saodi" style="font-weight: normal;"> سعودي </label>
                                </div>
                                <div class="col-xs-6">
                                    <input type="radio" name="country_type" value="out_saodi" id="out_saodi">
                                     &nbsp; &nbsp; 
                                    <label for="out_saodi" style="font-weight: normal;">غير سعودي</label>
                                </div>
                               
                            </div>
                        </div>



                        <div class="col-xs-12 country_class" style="padding: 6px;display: none;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              الدولة
                            </div>
                            <div class="col-xs-9">
                                <select class="select_2 form-control" name="country" id="country">             
                                    <option value="{{Auth::user()->country}}">{{Auth::user()->country}}</option>
                                    <option >أثيوبيا</option>
                                    <option >أذربيجان</option>
                                    <option >الأرجنتين</option>
                                    <option >الأردنّ</option>
                                    <option >أرمينيا</option>
                                    <option >إريتريا</option>
                                    <option >أسبانيا</option>
                                    <option >أستراليا</option>
                                    <option >أستونيا</option> 
                                    <option >أفريقيا الوسطى</option>
                                    <option >أفغانستان</option>
                                    <option >الإكوادور</option>
                                    <option >ألبانيا</option>
                                    <option >ألمانيا</option>
                                    <option >الإمارات</option>
                                    <option >أنتيجوا وباربودا</option>
                                    <option >أنجولا</option>
                                    <option >أندورا</option>
                                    <option >أندونيسيا</option>
                                    <option >أورجواي</option>
                                    <option >أوزبكستان</option>
                                    <option >أوغندا</option>
                                    <option >أوكرانيا</option>
                                    <option >إيران</option>
                                    <option >أيرلندا</option>
                                    <option >أيسلندا</option>
                                    <option >إيطاليا</option>
                                    <option >بابوا غينيا الجديدة</option>
                                    <option >باراجواي</option>
                                    <option >باربادوس</option>
                                    <option >باكستان</option>
                                    <option >بالو</option>
                                    <option >الباهاما</option>
                                    <option >البحرين</option>
                                    <option >البرازيل</option>
                                    <option >البرتغال</option>
                                    <option >بروناي</option>
                                    <option  >بلجيكا</option>
                                    <option >بلغاريا</option>
                                    <option >بنجلاديش</option>
                                    <option >بنما</option>
                                    <option >بنين</option>
                                    <option >بوتان</option>
                                    <option >بوتسوانا</option>
                                    <option >بوركينا فاسو</option>
                                    <option >بوروندي</option>
                                    <option >البوسنة والهرسك</option>
                                    <option >بولندا</option>
                                    <option >بوليفيا</option>
                                    <option >بيرو</option>
                                    <option >بيلاروسيا</option>
                                    <option >بيليز</option>
                                    <option >تايلاند</option>
                                    <option >تايوان</option>
                                    <option >تركمانستان</option>
                                    <option >تركيا</option>
                                    <option >ترينداد وتوباجو</option>
                                    <option >تشاد</option>
                                    <option >التشيك</option>
                                    <option >تشيلي</option>
                                    <option >تنزانيا</option>
                                    <option >توجو</option>
                                    <option >توفالو</option>
                                    <option >تونجا</option>
                                    <option >تونس</option>
                                    <option >تيمور الشرقية</option>
                                    <option >الجابون</option>
                                    <option >جامايكا</option>
                                    <option >جامبيا</option>
                                    <option >جرينادا</option>
                                    <option >الجزائر</option>
                                    <option >جزر القمر</option>
                                    <option >جزر المالديف</option>
                                    <option >جزر سولومون</option>
                                    <option >جزر كوكوس</option>
                                    <option >جزر مارشال</option>
                                    <option >جنوب أفريقيا</option>
                                    <option >جورجيا</option>
                                    <option >جيبوتي</option>
                                    <option >الدنمارك</option>
                                    <option >دومينيكا</option>
                                    <option >الدومينيكان</option>
                                    <option >الرأس الأخضر</option>
                                    <option >رواندا</option>
                                    <option >روسيا</option>
                                    <option >رومانيا</option>
                                    <option >زامبيا</option>
                                    <option >زيمبابوي</option>
                                    <option >ساحل العاج</option>
                                    <option >سريلانكا</option>
                                    <option >السّلفادور</option>
                                    <option >سلوفاكيا</option>
                                    <option >سلوفينيا</option>
                                    <option >سنغافورة</option>
                                    <option >السّنغال</option>
                                    <option >سوازيلاند</option>
                                    <option >السّودان</option>
                                    <option >سوريا</option>
                                    <option >سورينام</option>
                                    <option  >السّويد</option>
                                    <option  >سويسرا</option>
                                    <option  >سيراليون</option>
                                    <option  >سيشل</option>
                                    <option  >الصّومال</option>
                                    <option  >الصّين</option>
                                    <option  >طاجكستان</option>
                                    <option  >العراق</option>
                                    <option  >عمان</option>
                                    <option  >غانا</option>
                                    <option  >غواتيمالا</option>
                                    <option  >غويانا</option>
                                    <option  >غينيا</option>
                                    <option  >غينيا الاستوائيّة</option>
                                    <option  >غينيا بيساو</option>
                                    <option  >الفاتيكان</option>
                                    <option >فانواتو</option>
                                    <option >فرنسا</option>
                                    <option >الفلبّين</option>
                                    <option >فلسطين</option>
                                    <option >فنزويلا</option>
                                    <option >فنلندا</option>
                                    <option >فيتنام</option>
                                    <option >فيجي</option>
                                    <option >قبرص</option>
                                    <option >قرغيزستان</option>
                                    <option >قطر</option>
                                    <option >كازاخستان</option>
                                    <option >الكاميرون</option>
                                    <option >كرواتيا</option>
                                    <option >كمبوديا</option>
                                    <option >كندا</option>
                                    <option >كوبا</option>
                                    <option >كوريا الجنوبية</option>
                                    <option >كوريا الشمالية</option>
                                    <option >كوستا ريكا</option>
                                    <option >كولومبيا</option>
                                    <option >الكونغو</option>
                                    <option >الكونغو الديمقراطي</option>
                                    <option >الكويت</option>
                                    <option >كيريباتي</option>
                                    <option >كينيا</option>
                                    <option >لاتفيا</option>
                                    <option >لاوس</option>
                                    <option >لبنان</option>
                                    <option >لوكسمبورج</option>
                                    <option >ليبيا</option>
                                    <option >ليبيريا</option>
                                    <option >ليتوانيّا</option>
                                    <option >ليختنشتاين</option>
                                    <option >ليسوتو</option>
                                    <option >مالاوي</option>
                                    <option >مالطا</option>
                                    <option >مالي</option>
                                    <option >ماليزيا</option>
                                    <option >ماينمار (بورما سابقا)</option>
                                    <option >مدغشقر</option>
                                    <option >مصر</option>
                                    <option >المغرب </option>
                                    <option >مقدونيا</option>
                                    <option >المكسيك</option>
                                    <option >المملكة المتّحدة</option>
                                    <option >منغوليا</option>
                                    <option >موريتانيا</option>
                                    <option >موريشيوس</option>
                                    <option >موزمبيق</option>
                                    <option >مولدافيا</option>
                                    <option >موناكو</option>
                                    <option >ميكرونيسيا </option>
                                    <option >ناميبيا</option>
                                    <option >النّرويج</option>
                                    <option >النّمسا</option>
                                    <option >نورو</option>
                                    <option >نيبال</option>
                                    <option >النّيجر</option>
                                    <option >نيجيريا</option>
                                    <option >نيكاراجوا</option>
                                    <option >نيوزيلندا</option>
                                    <option >هايتي</option>
                                    <option >الهند</option>
                                    <option >هندوراس</option>
                                    <option >هنغاريا</option>
                                    <option >هولندا</option>
                                    <option >الولايات المتّحدة</option>
                                    <option >اليابان</option>
                                    <option >اليمن</option>
                                    <option >يوغسلافيا</option>
                                    <option >اليونان</option>
                                    <option >غير منتمي لدولة (بدون)</option>            
                                    </select>
                            </div>
                        </div>



                        <div class="col-xs-12 city_class" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              المدينة
                            </div>
                            <div class="col-xs-9">
                                <select class="form-control" name="city" id="city" >
                                    <option value="{{Auth::user()->city}}" selected="">{{Auth::user()->city}}</option>
                                    <option >ابها</option>
                                    <option >ابو عريش</option>
                                    <option >احد المسارحة</option>
                                    <option >احد رفيدة</option>
                                    <option >الاحساء</option>
                                    <option >اشيقر</option>
                                    <option >اضم</option>
                                    <option >الافلاج</option>
                                    <option >املج</option>
                                    <option >الباحة</option>
                                    <option >بارق</option>
                                    <option >البدائع</option>
                                    <option >بدر</option>
                                    <option >البدع</option>
                                    <option >البرك</option>
                                    <option >بريدة</option>
                                    <option >بقعاء</option>
                                    <option >بقيق</option>
                                    <option >البكيرية</option>
                                    <option >بلجرشي</option>
                                    <option >بلقرن</option>
                                    <option >بيش</option>
                                    <option >بيشة</option>
                                    <option >تبوك</option>
                                    <option >تثليث</option>
                                    <option >تربة</option>
                                    <option >تنومة</option>
                                    <option >تيماء</option>
                                    <option >ثادق</option>
                                    <option >جازان</option>
                                    <option >جبة</option>
                                    <option >الجبيل</option>
                                    <option >جدة</option>
                                    <option >الحائط</option>
                                    <option >حائل</option>
                                    <option >حبونا</option>
                                    <option >الحريق</option>
                                    <option >حريملاء</option>
                                    <option >حفر الباطن</option>
                                    <option >حقل</option>
                                    <option >الحناكية</option>
                                    <option >حوطة بني تميم</option>
                                    <option >الخبر</option>
                                    <option >الخرج</option>
                                    <option >الخرمة</option>
                                    <option >الخطة</option>
                                    <option >الخفجي</option>
                                    <option >خليص</option>
                                    <option >خميس مشيط</option>
                                    <option >الداير</option>
                                    <option >الدرعية</option>
                                    <option >الدمام</option>
                                    <option >الدوادمي</option>
                                    <option >رابغ</option>
                                    <option >راس تنورة</option>
                                    <option >رجال المع</option>
                                    <option >الرس</option>
                                    <option >رفحاء</option>
                                    <option >رماح</option>
                                    <option >رنية</option>
                                    <option >الروضة</option>
                                    <option >الرياض</option>
                                    <option >رياض الخبراء</option>
                                    <option >الريث</option>
                                    <option >الزلفي</option>
                                    <option >سراة عبيدة</option>
                                    <option >سكاكا</option>
                                    <option >السليل</option>
                                    <option >سميراء</option>
                                    <option >شرورة</option>
                                    <option >شقراء</option>
                                    <option >الشماسية</option>
                                    <option >الشملي</option>
                                    <option >الشنان</option>
                                    <option >صامطة</option>
                                    <option >صبيا</option>
                                    <option >ضباء</option>
                                    <option >ضرماء</option>
                                    <option >ضمد</option>
                                    <option >الطائف</option>
                                    <option >طريف</option>
                                    <option >الظهران</option>
                                    <option >ظهران الجنوب</option>                 
                                    <option >العارضة</option>
                                    <option >عرعر</option>
                                    <option >عفيف</option>
                                    <option >العلا</option>
                                    <option >عنيزة</option>
                                    <option >العيدابي</option>
                                    <option >عيون الجواء</option>
                                    <option >الغاط</option>
                                    <option >الغزالة</option>
                                    <option >فرسان</option>
                                    <option >فيفاء</option>
                                    <option >القريات</option>
                                    <option >قرية العليا</option>
                                    <option > القطيف</option>
                                    <option >القنفذة</option>
                                    <option > القويعية</option>
                                    <option >الكامل</option>
                                    <option >الليث</option>
                                    <option > المجاردة</option>
                                    <option > المجمعة</option>
                                    <option > محايل</option>
                                    <option > المخواة</option>
                                    <option >المدينة المنورة</option>
                                    <option > المذنب</option>
                                    <option > مرات</option>
                                    <option > المزاحمية</option>
                                    <option >مكة المكرمة</option>
                                    <option > المندق</option>
                                    <option >مهد الذهب</option>
                                    <option >المويه</option>
                                    <option >نجران</option>
                                    <option > النعيرية</option>
                                    <option > النماص</option>
                                    <option > وادي الدواسر</option>
                                    <option > الوجه</option>
                                    <option >ينبع</option> 
                                </select>    
                            </div>
                        </div>


                        

                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              حالة الاقامة
                            </div>
                            <div class="col-xs-9">
                               

                                <select  type="" name="location_status" class="form-control" style="border-radius: 0px;box-shadow: none;padding: 0px;">
                                    <option value="{{Auth::user()->location_status}}" selected>{{Auth::user()->location_status}}</option>
                                    <option value="قبائل نازحة"> قبائل نازحة</option>
                                    <option value="زوج مواطنة">زوج مواطنة</option>
                                    <option value="زوجة مواطن">زوجة مواطن</option>
                                    <option value="ابن مواطنة">ابن مواطنة</option>
                                    <option value="ابنة مواطنة">ابنة مواطنة</option>
                                    <option value="وافد باقامة قابلة للتحويل">وافد باقامة قابلة للتحويل</option>
                                    <option value="وافد باقامة غير قابلة للتحويل"> وافد باقامة غير قابلة للتحويل</option>
                                    <option value="غير مقيم">غير مقيم</option>
                                  </select>


                               
                            </div>
                        </div>













                       
                        <div class="col-xs-12" style="padding: 6px;">
                            <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              ملاحظات
                            </div>
                            <div class="col-xs-9">
                              <textarea type="" name="details1" class="form-control" style="min-height: 250px;max-width: 100%;min-width: 100%;">{{Auth::user()->details1}}</textarea>
                            </div>

                        </div>
                        
                            
                    </div>















                    <button style="position: absolute;bottom: 0px;width: 180px;height: 35px;background: #2ab27b;left: 0px;border-bottom-left-radius: inherit;color: #fff;padding: 5px;cursor: pointer;color:#fff ; box-shadow: none;border:none;" class="text-center"> 

                         
                             حفظ ومتابعة
                         
                   
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