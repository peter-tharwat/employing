@extends('header.header')

@section('content')
     <div class="col-xs-12 effect-content"  style=" overflow: hidden;">
 
            <div class="panel" >
         
               
                <section >
     
                    <header class="panel-heading text-right"  style="padding: 5px 6px;">
                        
                        <div class="col-xs-5" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">صفحة تفاصيل العميل</span>
                        </div>
           
                    </header>
                    <div class="panel-body" style="padding-top: 0px;">
                      <div class="col-xs-12 " style="background: #fff;padding: 10px 5px; ">
                         <div class="panel panel-primary " style="padding: 0px;    border: 1px solid transparent;">
                        
                          <div class="panel-footer  row  " style=" background: #fff;border:none!important;padding : 0px; ">
                          <div class="col-xs-12 col-md-7 col-lg-8  "> <h6 style="color: #444;font-family: 'Cairo';"><span class="fa fa-user" style="padding: 0px 5px;color: #13c4a5"></span>  معلومات العميل  </h6>
                              <div style="height: 1px; background: #13c4a5;"></div>
                              <div class="col-xs-10" style="padding: 20px 5px;">


                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                   الاسم
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                    {{ $client['name'] }}
                                  </div>
                                </div>
                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                   البريد الالكتروني
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                    {{ $client['email'] }}
                                  </div>
                                </div>
                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                  رقم الهاتف
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                   {{ $client['phone'] }}
                                  </div>
                                </div>
                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                  اشعار تنبية
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                    @if($client['send_not']=='on')
                                    <span class="fa fa-check" style="color: green"></span>
                                    @endif
                                    @if($client['send_not']!='on')
                                    <span class="fa fa-times" style="color: red"></span> 
                                    @endif

                                    
                                  </div>
                                </div>
                             {{--    <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                  عبر
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">

                                    <span class="fab fa-whatsapp" style="color: green"></span> - <span class="far fa-envelope" style="color: green"></span>
                                  </div>
                                </div> --}}
                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                  كل
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                    {{ $client['send_not_period'] }}
                                  </div>
                                </div>

     
                              </div>   
                            </div>



                            <?php $account= \App\Http\Controllers\MessageController::calc_account_deal($client['id']); ?>
                            <div class="col-xs-12 col-md-5 col-lg-4  ">
                              <h6 style="color: #444;"><span class="fas fa-info-circle" style="padding: 0px 5px;color: #13c4a5"></span>دفتر الحساب </h6>
                              <div style="height: 1px; background: #13c4a5;"></div>
                              <div class="col-xs-12" style="padding: 20px 5px 0px;">
                                <div class="col-xs-2">
                                  <div   style="padding: 15px 0px 0px; background: rgb(51, 51, 51); height: 50px;border-radius: 10px;max-width: 29px;"><span style="transform: rotate(270deg); display: inline-block; padding: 0px;color: #fff;position: relative;left: -1px;">خصم</span></div>
                                </div>

                                <div class="col-xs-10">
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['RS_P'] }}</span>
                                      <br>
                                     ر-س
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['YER_P'] }}</span>
                                      <br>
                                     ر-ي
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['RO_P'] }}</span>
                                      <br>
                                     ر-ع
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['USD_P'] }}</span>
                                      <br>
                                     دولار
                                    </div>
                                  </div>

                                 

                                </div>

                                 <div class="col-xs-12">
                                    <hr>
                                  </div>


                              </div>

                              <div class="col-xs-12" style="padding: 0px 5px;">
                                <div class="col-xs-2">
                                  <div   style="padding: 15px 0px 0px; background: rgb(51, 51, 51); height: 50px;border-radius: 10px;max-width: 29px;"><span style="transform: rotate(270deg); display: inline-block; padding: 0px;color: #fff;position: relative;left: -5px;">قيد</span></div>
                                </div>

                                <div class="col-xs-10">
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['RS_B'] }}</span>
                                      <br>
                                     ر-س
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['YER_B'] }}</span>
                                      <br>
                                     ر-ي
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['RO_B'] }}</span>
                                      <br>
                                     ر-ع
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['USD_B'] }}</span>
                                      <br>
                                     دولار
                                    </div>
                                  </div>

                                 

                                </div>

                                 <div class="col-xs-12">
                                    <hr>
                                  </div>


                              </div>
 
                             </div>

 

                             <div class="col-xs-12  "> <h6 style="color: #444;font-family: 'Cairo';"><span class="fa fa-user" style="padding: 0px 5px;color: #13c4a5"></span>  تفاصيل الحساب </h6>
                              <div style="height: 1px; background: #13c4a5;"></div>
                              <div class="col-xs-12" style="padding: 0px 0px 20px;">

                                <table class="table" >
                                  
                                    <tr style="background: #f2f8fe ">
                                      <td>كود</td>
                                      <td>نوع المعاملة</td>
                                      <td>المبلغ</td>
                                      <td>العملة</td>
                                      <td>التاريخ</td>
                                      <td>اشعار الانشاء</td>
                                      <td>وذلك عن</td>

                                    </tr>
                                    @foreach($deal as $mydeal)
                                    <tr>
                                      <td>{{ $mydeal->id }}</td>
                                      <td>
                                        <?php if($mydeal->deal_borrow_payback=='borrow')echo "قيد";else echo "خصم"; ?>
                                         

                                      </td>
                                      <td>{{ $mydeal->deal_mount }}</td>
                                      <td>{{ $mydeal->deal_currency }}</td>
                                      <td>{{ $mydeal->created_at }}</td>
                                      <td>

                                        

                                        <?php if (strpos($mydeal->deal_init_send_not_methods , 'whatsapp') !== false) {echo '<span class="fab fa-whatsapp" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php    if (strpos($mydeal->deal_init_send_not_methods , 'email') !== false) {echo '-<span class="far fa-envelope" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php   if (strpos($mydeal->deal_init_send_not_methods , 'sms') !== false) {echo '-<span class="fas fa-mobile-alt" style="color:#3fcf7f;font-size: 16px; "></span>';}?>



                                      </td>
                                      <td>{{ $mydeal->for }}</td>
                                      
                                    </tr>
                                    @endforeach

                           
                                </table>
                              </div>   
                            </div>






















                        <div>
                      </div>
                    </div>
                   </div>
                  </div>          
                    </div>
                </section> 
            </div>
         
      
     </div>
@endsection