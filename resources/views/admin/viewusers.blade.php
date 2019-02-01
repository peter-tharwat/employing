@extends('adminheader.header')

@section('content')
     <div class="col-xs-12 effect-content" style="padding: 0px;"  >

            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">عرض كافة المسجلين</span>  
                            <form method="POST" action="/user/destroy" style="display: inline-block;margin: 0px" id="removeuserform">
                              {{ csrf_field()}}
                              <input type="hidden" name="id" value="" id="removeid">
                              
                            <span class="hidden-sm" style="padding: 3px;display: inline-block; border:1px solid #13c4a5;background: #f2fffd;opacity: 0;" id="removealert">حذف ؟
                              <span  style="padding-right: 50px;">

                                 {{-- <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5;margin: 0px 0px; ">
                                <span class="fa fa-times" style="width: 15px;padding: 0px 3px;color: #f93885"></span>
                                </span> --}} 
                                 <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5; color: #13c4a5 ;cursor:pointer" onclick="$('#removeuserform').submit();">
                                  <span class="fa fa-check" style="width: 15px;padding: 0px 1px" ></span>
                                 </span>

                                
                              </span>
                              </form>
                              

                            </span>   
                            

                        </div>
                        <div style="padding: 0px" class="col-xs-2 ">
                          <form method="get" action="/dashboard/user/search">
                            
                         
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
                                       <td>الاسم</td>
                                       <td>البريد الاكتروني</td>
                                       <td>الهاتف</td>
                                       <td>عملية</td>
                                   </tr>
                               </thead>
                               <tbody>

                                @foreach($user as $myuser)
                                  <tr>
                                     <td>{{  $myuser->id }}</td>
                                     <td>{{  $myuser->name }}</td>
                                     <td>{{  $myuser->email }}</td>
                                     <td>{{  $myuser->phone }}</td>
                                     <td>
                                      
                                      <a href="/dashboard/user/{{$myuser->id}}/show">
                                        <span class="fa fa-search" style="color: #13c4a5"></span>
                                      </a>
                                      
                            

                                   

                                     </td>
                                  </tr>          
                                @endforeach
                                        

                                    
  
                               </tbody>


                           </table>
                           {{ $user->links() }}
                       </div>
                    </div>
                </section> 
            </div>
         
      
     </div>
@endsection