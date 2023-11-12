@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
<div class="row">
    <div class="col-md-12 my-4">
      <h2 class="h4 mb-1"> فرص التدريب المتاحة  </h2>
      <br>
      {{-- <p class="mb-3">Child rows with additional detailed information</p> --}}
      <div class="card shadow">
        <div class="card-header">
          <a type="button" href="" class="btn mb-2 btn btn-primary" data-toggle="modal" data-target="#defaultModal">   اضافة تدريب  </a>

        </div>
        <div class="card-body">
          <!-- table -->
          <table class="table table-hover table-borderless border-v">
            <thead class="thead-dark">
              <tr>
       
                <th>م</th>
                <th>لوجو الشركة </th>
                <th>اسم الشركة </th>               
                <!--<th>التفاصيل</th>-->
                <th>رابط التقديم</th>
               
                <th>العمليات</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trainings as $training)
                <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">

                <td>{{$loop->iteration}}</td>
                <td>
                                    <img src="{{( $training->logo!== null)? asset('images/'.$training->logo):asset('front/img/x.png')}}" style="margin-left: 20px;width: 60px;height: 60px; "  alt="">

                 </td>
                <td>{{$training->name}}</td>
                <!--<td>{{$training->description}}</td>-->
                <td>
                  <a href="{{$training->link}}">{{$training->link}}</a>
                </td>               
                
                
                
               
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="text-muted sr-only">Action</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#defaultModal{{$training->id}}">   تعديل  </a>
                  <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#delete{{$training->id}}">   حذف  </a>
                 
                </div>
                
              </td>


              <div class="modal fade" id="delete{{$training->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="defaultModalLabel"> هل انت متاكد من عملية الحذف ؟ </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('training.destroy',$training->id)}}" method='post' enctype="multipart/form-data">
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
                    <div class="modal fade" id="defaultModal{{$training->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="defaultModalLabel"> تعديل بيانات الشركة</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('training.update',$training->id)}}" method='post' enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                          
                            <div class="container">
                              <div class="row">
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  اسم الشركة  </label>
                                  <input type="text" name="name" value="{{$training->name}}" class="form-control" id="inputPassword4" >
                              
                                </div>
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  لوجو الشركة  </label>
                                  <input type="file" name="logo"  class="form-control"  id="inputPassword4" >
                              
                                </div>
                            
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  لينك الشركة  </label>
                                  <input type="text" name="link" value="{{$training->link}}" class="form-control" id="inputPassword4" >
                              
                                </div>
                               
          
                             
                                
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4"> التفاصيل   </label>
                                  <textarea type="text" name="description"  class="form-control" rows="3" id="inputPassword4" >{{$training->description}}</textarea>
                              
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
                        <h5 class="modal-title" id="defaultModalLabel"> اضافة شركة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{route('training.store')}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                          <div class="row">
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  اسم الشركة  </label>
                              <input type="text" name="name"  class="form-control" id="inputPassword4" >
                          
                            </div>
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  لوجو الشركة  </label>
                              <input type="file" name="logo"  class="form-control" id="inputPassword4" >
                          
                            </div>
                           
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  لينك الشركة  </label>
                              <input type="text" name="link"  class="form-control" id="inputPassword4" >
                          
                            </div>
                           
      
                             
                            
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4"> التفاصيل   </label>
                              <textarea type="text" name="description"  class="form-control" rows="3" id="inputPassword4" ></textarea>
                          
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