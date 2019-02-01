<!--programming of this page-->

<?php 
    $process_bar_precent=0;
    if($_SERVER['PHP_SELF']=='/index.php/profile1')
        $process_bar_precent=30;
    else if ((string)$_SERVER['PHP_SELF']=='/index.php/profile2')
         $process_bar_precent=50;
    else if ($_SERVER['PHP_SELF']=='/index.php/profile3')
        $process_bar_precent=70;
    else if ($_SERVER['PHP_SELF']=='/index.php/profile4')
        $process_bar_precent=90;

   # echo $_SERVER['PHP_SELF'];
 
?>
<!--end programming of this page-->


  <div class="col-xs-12 col-sm-12 col-md-9 panel panel-default" style="background: #fff; ;margin-bottom: 20px;">
                <div class="col-xs-12" style="padding:5px 0px ; margin-top: 20px; ">

                     

         <div class="col-xs-12 col-sm-5">

            <div class="col-xs-12 col-sm-6 text-center">
                




                <a >
                    المعلومات الاساسية
                </a>
             
             </div>
             <div class="col-xs-12 col-sm-6 text-center">
                <a  href='/profile1' >
                    المعلومات الشخصية
                </a>
                 
             </div>

             
         </div>

         <div class="col-xs-12 col-sm-7">
             
             <div class="col-xs-12 col-sm-4 text-center">
                
                <a <?php if(\Auth::user()->personal_info_step=='1') echo "href='/profile2'";?>  >
                    المؤهل  
                </a>
             
             </div>

             <div class="col-xs-12 col-sm-4 text-center">
                
                <a <?php if(\Auth::user()->qualification_step=='1') echo "href='/profile3'";?> >
                      سنوات الخبرة
                </a>
               
             </div>
              

             <div class="col-xs-12 col-sm-4 text-center">
                <a  <?php if(\Auth::user()->exp_step=='1') echo "href='/profile4'";?> >
                    ارفاق ملفات
                </a>
             </div>



         </div>
         
    </div>
    <div class="col-xs-12" style="padding:5px 10px ; margin-top: 20px;position: relative; ">
         <div style="position: absolute;width: 20px;height: 20px;background: #2ab27b;border-radius: 50%;top: 0px;right: {{$process_bar_precent}}%">
            
        </div>  

        <div class="progress" style="height: 10px;">
          <div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{$process_bar_precent+2}}%;">
            <span class="sr-only"></span>
          </div>
        </div>  
               
    </div>

</div>