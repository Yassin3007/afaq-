@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
<div class="row">
    <div class="col-md-12 my-4">
      <h2 class="h4 mb-1"> فرص الدراسات العليا داخل المملكة      </h2>
      <br>
   
      <div class="card shadow">
        <div class="card-header">
          <a type="button" href="" class="btn mb-2 btn btn-primary" data-toggle="modal" data-target="#defaultModal">   اضافة المؤسسة التعليمية  </a>

        </div>
        <div class="card-body">
          <!-- table -->
          <table class="table table-hover table-borderless border-v">
            <thead class="thead-dark">
              <tr>
       
                <th>م</th>
                <th>لوجو المؤسسة التعليمية </th>
                <th>اسم المؤسسة التعليمية </th>               
                <!--<th>تفاصيل البرنامج</th>-->
                <th>رابط التقديم</th>
                <th>المرفقات </th>
               
                <th>العمليات</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($postgraduates as $postgraduate)
                <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">

                <td>{{$loop->iteration}}</td>
                <td>
                  <img src="{{asset('images/'. $postgraduate->logo)}}" width="100px" alt="">
                 </td>
                <td>{{$postgraduate->name}}</td>
                <!--<td>-->
                  
                <!--  {!!$postgraduate->description!!}</td>-->
                <td>
                  <a href="{{$postgraduate->link}}">{{$postgraduate->link}}</a>
                </td>               
                <td>
                  <a href="{{asset('images/'.$postgraduate->file)}}" target="_blank">
                  تحميل المرفقات
                  </a>
                  
                </td>
                
                
                
               
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="text-muted sr-only">Action</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#defaultModal{{$postgraduate->id}}">   تعديل  </a>
                  <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#delete{{$postgraduate->id}}">   حذف  </a>
                 
                </div>
                
              </td>


              <div class="modal fade" id="delete{{$postgraduate->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="defaultModalLabel"> هل انت متاكد من عملية الحذف ؟ </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('postgraduate.destroy',$postgraduate->id)}}" method='post' enctype="multipart/form-data">
                      @csrf
                      @method("DELETE")
                     
                    <div class="modal-footer">
                      <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">اغلاق</button>
                      <button type="submit" class="btn mb-2 btn-primary"> تاكيد</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>

                    <!-- Button trigger modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="defaultModal{{$postgraduate->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="defaultModalLabel"> تعديل بيانات الشركة</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('postgraduate.update',$postgraduate->id)}}" method='post' enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                          
                            <div class="container">
                              <div class="row">
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  اسم المؤسسة التعليمية  </label>
                                  <input type="text" name="name" value="{{$postgraduate->name}}" class="form-control" id="inputPassword4" >
                              
                                </div>
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  لوجو المؤسسة التعليمية  </label>
                                  <input type="file" name="logo"  class="form-control" id="inputPassword4" >
                              
                                </div>
                               
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  رابط التقديم  </label>
                                  <input type="text" name="link" value="{{$postgraduate->link}}" class="form-control" id="inputPassword4" >
                              
                                </div>
    
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  المرفقات(اختيارى)   </label>
                                  <input type="file" name="file"  class="form-control" id="inputPassword4" >
                              
                                </div>
    
                                
                               
          
                                 
                                
                                <div  class="modal-body col-md-12"> 
                                  <label for="inputPassword4"> التفاصيل   </label>
                                  <textarea  id="myTextarea" type="text" name="description"   id="inputPassword4" >{!!$postgraduate->description!!}</textarea>
                              
                                </div>
                              </div>
                            </div>
                           
                          <div class="modal-footer">
                            <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn mb-2 btn-primary"> تاكيد</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </tr>

                @endforeach
                
             

                <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel"> اضافة المؤسسة التعليمية</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{route('postgraduate.store')}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                          <div class="row">
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  اسم المؤسسة التعليمية  </label>
                              <input type="text" name="name"  class="form-control" id="inputPassword4" >
                          
                            </div>
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  لوجو المؤسسة التعليمية  </label>
                              <input type="file" name="logo"  class="form-control" id="inputPassword4" >
                          
                            </div>
                           
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  رابط التقديم  </label>
                              <input type="text" name="link"  class="form-control" id="inputPassword4" >
                          
                            </div>

                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  المرفقات(اختيارى)   </label>
                              <input type="file" name="file"  class="form-control" id="inputPassword4" >
                          
                            </div>

                            
                           
      
                             
                            
                            <div  class="modal-body col-md-12"> 
                              <label for="inputPassword4"> التفاصيل   </label>
                              <textarea  id="myTextarea" type="text" name="description"   id="inputPassword4" ></textarea>
                          
                            </div>
                          </div>
                        </div>
                        
                      
                      
                    
                      
                      <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn mb-2 btn-primary"> تاكيد</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> <!-- end section -->
</div>
</div>
</div>



  @endsection