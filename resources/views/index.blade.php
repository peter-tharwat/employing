
@extends('layouts.app')
@section('content')

<?php $foundjobs=0; ?>

<div class="col-xs-12 screen-dev"  >
    <div class="container">

  {{--     <div class="col-xs-12" style="background: #fff;min-height: 61px;    background: #fff; border-radius: 14px;
    border: 1px dashed #b5d6ef;">
        <div class="col-xs-12 text-center col-sm-3 " style="padding: 8px 0px ;">
          <h4>دوام كامل</h4>
           
        </div>
      </div> --}}



        @foreach($job as $myjob) 
        <?php $foundjobs=1; ?>

        <div style="color: #fff ;background:#fff;border-radius: 10px; min-height: 120px;padding: 0px;box-shadow: 0px 0px 10px #ccc;margin-top: 15px;position: relative;" class="col-xs-12" >
           
                <div style="position: absolute;bottom: 0px;width: 80px;height: 35px;background: #66c4a6;left: 0px;border-bottom-left-radius: inherit;color: #fff;padding: 5px;cursor: pointer;" class="text-center applying"  data-target="#myModal{{$myjob->id}}" data-toggle="modal"> 

                     <a  style="color:#fff " >
                         تقديم
                     </a>
                   
                </div>
            <div class="col-xs-10">
                <div class="col-xs-12" style="padding:10px 5px;font-size: 16px;color: #2381c6;cursor: pointer;" data-toggle="modal" data-target="#myModal{{$myjob->id}}" >
                {{$myjob->title}}
                </div>
                <div class="col-xs-12" style="color: #666;padding:0px 10px 10px 0px;font-size: 13px; text-align: justify;">
                 

                    <span style="padding: 2px 0px 0px 10px;"> <span class="far fa-clock" style="padding: 0px 0px 0px 8px;"></span>تاريخ النشر  {{$myjob->start_date}}<span class="fa fa-arrow-left"></span>  {{$myjob->end_date}}</span>


                    <span style="padding: 2px 0px 0px 10px;"> <span class="fas fa-file-signature" style="padding: 0px 0px 0px 8px;"></span>   
                    <?php if($myjob->type=='F') 
                              echo "دوام كامل";
                          else if($myjob->type=='V') 
                              echo "تطوع";
                          else if($myjob->type=='P') 
                              echo "دوام جزئي";
                          else if($myjob->type=='T') 
                              echo "تدريب تعاوني";
                           ?>
                     </span>

                    
                  
                </div>    

                <div class="col-xs-12" style="color: #666;padding:0px 10px 10px 0px;font-size: 13px; text-align: justify;">
                     {{$myjob->desc}}
                </div>

                
            </div>
            <div class="col-xs-2">

                @guest
                @else
                <div style="position: absolute;top: 0px;width: 80px;height: 35px; left: 0px;border-bottom-left-radius: inherit;color: #fff;padding: 5px 18px;float: left;" class="text-left">
                    <span class=" fa-heart pin-heart 
                    <?php if(\App\Http\Controllers\ApplicantController::farOrFas($myjob->id)) echo'fas';else echo 'far'; ?>

                    " id="{{$myjob->id}}" style="color: #ff2525;font-size: 15px;padding-top: 8px;cursor: pointer;"> </span>
                </div>
                @endguest

            </div> 

            <div id="myModal{{$myjob->id}}" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 0px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: #2381c6">{{$myjob->title}}</h4>
                  </div>
                  <div class="modal-body">
                    <p style="color: #333">{{$myjob->desc}}</p>
                  </div>
                  <div class="modal-footer" style="padding:15px 0px  0px;">

                    <div class="col-xs-12" style="color: #666;padding:0px 15px 20px 0px;font-size: 13px; text-align: justify;">
                 

                    <span style="padding: 2px 0px 0px 10px;"> <span class="far fa-clock" style="padding: 0px 0px 0px 8px;"></span>تاريخ النشر  {{$myjob->start_date}}<span class="fa fa-arrow-left"></span>  {{$myjob->end_date}}</span>


                    <span style="padding: 2px 0px 0px 10px;"> <span class="fas fa-file-signature" style="padding: 0px 0px 0px 8px;"></span>   
                    <?php if($myjob->type=='F') 
                              echo "دوام كامل";
                          else if($myjob->type=='V') 
                              echo "تطوع";
                          else if($myjob->type=='P') 
                              echo "دوام جزئي";
                          else if($myjob->type=='T') 
                              echo "تدريب تعاوني";
                           ?>
                     </span>

                    
                  
                </div>  


                  
                  <div class="col-xs-12" style="padding: 0px;">
                    <hr style="margin: 0px;padding: 15px 0px 0px 0px;">
                  </div>
                  <div class="col-xs-12 text-right" style="color: #333;padding: 5px 10px ;">
                    يرجي العلم انه 
                    <ul>
                      <li style="color: red">يجب عليك ملئ الخانات المطلوبة في حسابك الشخصي</li>
                      <li style="color: red">يمكنك التقدم فقط ل عدد 2 وظيفة حتي يتم اتخاذ اجراء بخصوص التقديم</li>
                    </ul>
                    
                  </div>

                  <div class="col-xs-12" style="padding: 0px 10px 20px;">

                    @guest
                    @else
                    <form method="POST" action="/appling" id="appling_form{{$myjob->id}}">
                      @csrf
                      <input type="hidden" name="id" value="{{$myjob->id}}">
                      <button type="button" class="btn btn-default" onclick="$('#appling_form{{$myjob->id}}').submit();">مواصلة</button>
                    </form>
                    @endguest
                    
                  </div>

 
                  </div>
                </div>

              </div>
            </div>


 





        </div>



  
        @endforeach
        @if(!$foundjobs)
          <div class="col-xs-12 text-center"  style="padding-top: 200px;">
            <h1 >
            <span class="fa fa-info-circle" style="color: #2381c6"></span>   لم يتم إضافة وظائف بعد !
            </h1>
           
          </div>
        @endif
        


        



        
    </div>
    
</div>


 


<script type="text/javascript">
 
        @guest @else


         


           $('.pin-heart').click(function(){

              /*  $(this).toggleClass('far');
                $(this).toggleClass('fas');
                */
                


                

                if($(this).hasClass('far'))
                {

                    


                    $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                    });

                    $.ajax({
                          method: "POST",
                          url: "/updatelove",
                          data: { id: $(this).attr('id'),status:'open' }
                        })
                      .done(function( msg ) {});
                    $(this).removeClass('far');
                    $(this).addClass('fas');



                    
                }
                else
                {
                    
                    


                    $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                    });

                    $.ajax({
                      method: "POST",
                      url: "/updatelove",
                      data: { id: $(this).attr('id'),status:'close' }
                    })
                  .done(function( msg ) {});

                  $(this).removeClass('fas');
                  $(this).addClass('far');


                  

                    


                }
                
                
            }); 
        @endguest



   
</script>


@endsection