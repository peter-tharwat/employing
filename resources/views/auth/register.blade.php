@extends('layouts.app')

@section('content')





<style type="text/css">
  body
  {
    background: #fff
  }
</style>
<div class="container-fluid"  >


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">



        <div class="  col-xs-12 " style="padding: 15px;">
     
            <div style=" ; max-width: 100%; padding-top:50px!important;background-size: 100% 100%;padding-bottom: 60px;" class="padding0xs" >



                <div class="container" style="padding: 0px;">
                    <div class="col-xs-12">
                        @foreach ($errors->all() as $message)  
                        <div class="alert alert-danger" style="border-radius: 0px;">
                            {{$message}}
                        </div>
                        @endforeach
                    </div>
                </div>

                


                 <form method="POST" action="{{ route('register') }}">
                        @csrf


                     
                <div style="width: 600px ; max-width: 100%;background: rgba(250,250,250,.97); ;margin: 0px auto;padding: 40px 0px " class="row">


                    <div style="width: 500px; background: #fff;  margin:0px auto ;padding: 10px 0px;      max-width: 100%; " class="row">
             

                        <div class="col-xs-12">
                            <div class="col-xs-12 text-center" style="padding-top: 10px;">
                                <h4 style="color: #428bca; font-weight: bolder;margin: 0;">تسجيل </h4>
                            </div>
                        </div>

                     



                            <div class="col-xs-12 " style="margin: 3px 0px;padding-top: 30px ">
                                 
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon3" style="border-right: 1px solid #ccc;    border-radius: 0;padding:11px 10px 8px 13px"><span class="fa fa-user" style="color: #555555"></span> </span>
                                  <input type="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('name') }}" required autofocus    placeholder="اسم المستخدم  " name="name" style="    border-radius: 0;">
                                </div>
                            </div>


                             
                            

                            <div class="col-xs-12 " style="margin: 3px 0px ">
                                 
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon3" style="border-right: 1px solid #ccc;    border-radius: 0;padding:11px 10px 8px 13px"><span class="fa fa-envelope" style="color: #555555"></span> </span>
                                  <input type="email" class="form-control"   placeholder=" البريد الالكتروني   " name="email" style="    border-radius: 0;">
                                </div>
                            </div>

                           <!--  <div class="col-xs-12 " style="margin: 3px 0px ">
                                 
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon3" style="border-right: 1px solid #ccc;    border-radius: 0;padding:11px 10px 8px 13px"><span class="fa fa-phone" style="color: #555555"></span> </span>
                                  <input type="password" class="form-control"   placeholder="الهاتف    " name="phone" style="    border-radius: 0;">
                                </div>
                            </div> -->


                            <div class="col-xs-12 " style="margin: 3px 0px ">
                                 
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon3" style="border-right: 1px solid #ccc;    border-radius: 0;padding:11px 10px 8px 13px"><span class="fa fa-user-secret" style="color: #555555"></span> </span>
                                  <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  required    placeholder="كلمة السر    " name="password" style="    border-radius: 0;">
                                </div>
                            </div>

                            <div class="col-xs-12 " style="margin: 3px 0px ">
                                 
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon3" style="border-right: 1px solid #ccc;    border-radius: 0;padding:11px 10px 8px 13px"><span class="fa fa-user-secret" style="color: #555555"></span> </span>
                                  <input type="password" class="form-control"   placeholder="تأكيد كلمة السر   " name="password_confirmation" style="    border-radius: 0;">
                                </div>
                            </div>


                            






                         

                            <div class="col-xs-12" style="margin-top: 10px;">
                                <button style=" padding:10px 0px ; width: 100%;border-radius: 0;background: #2386c8" class="btn btn-info " >
                                    <h4 style="font-weight: bolder;margin: 0;color: #fff;">تسجيل </h4>
                                </button>
                            </div>
                         

                         
                            
                        </div>
                    </div>
                    
                </div>
            </form>

                <style type="text/css">
                 ::-webkit-input-placeholder {
                        font-weight: bolder;
                     
                    }
                </style>
                     
            </div>
 
        </div>
</div>

 
@endsection
