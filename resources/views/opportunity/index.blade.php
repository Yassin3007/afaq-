@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
<div class="row">
    <div class="col-md-12 my-4">
      <h2 class="h4 mb-1"> الفرص الوظيفية الشاغرة </h2>
      <br>
      {{-- <p class="mb-3">Child rows with additional detailed information</p> --}}
      <div class="card shadow">
        <div class="card-header">
          <a type="button" href="" class="btn mb-2 btn btn-primary" data-toggle="modal" data-target="#defaultModal">   اضافة وظيفة  </a>
          <a type="button" href="" class="btn mb-2 btn btn-primary" data-toggle="modal" data-target="#setting">   اعدادات ظهور الوظائف الشاغرة   </a>

        </div>
        <div class="card-body">
          <!-- table -->
          <table class="table table-hover table-borderless border-v">
            <thead class="thead-dark">
              <tr>
       
                <th>م</th>
                <th>لوجو الشركة </th>
                <th>اسم الشركة </th>               
                <th>المسمي الوظيفي </th>               
                <!--<th>رابط التقديم</th>-->
                <th>الحالة</th>
                <th>تاريخ البداية</th>
                <th>تاريخ النهاية</th>
                <th>العمليات</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($opportunities as $opportunity)
                <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">

                <td>{{$loop->iteration}}</td>
                <td>
                  <img src="{{asset('images/'. $opportunity->logo)}}" width="100px" alt="">
                 </td>
                <td>{{$opportunity->company_name}}</td>
                <td>{{$opportunity->title}}</td>
             
                <!--<td>-->
                <!--  <a href="{{$opportunity->link}}">{{$opportunity->link}}</a>-->
                <!--</td>               -->
                <td>
                  @if($opportunity->start<= date('Y-m-d') && $opportunity->end > date('Y-m-d'))
                  <span class="badge badge-success">متاحة الان</span>

                  @else
                  <span class="badge badge-danger">غير متاحة  </span>

                  @endif
                </td>
                <td>{{$opportunity->start}}</td>
                <td>{{$opportunity->end}}</td>
                
                
               
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="text-muted sr-only">Action</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#defaultModal{{$opportunity->id}}">   تعديل  </a>
                  <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#delete{{$opportunity->id}}">   حذف  </a>
                 
                </div>
                
              </td>


              <div class="modal fade" id="delete{{$opportunity->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="defaultModalLabel"> هل انت متاكد من عملية الحذف ؟ </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('opportunity.destroy',$opportunity->id)}}" method='post' enctype="multipart/form-data">
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
                    <div class="modal fade" id="defaultModal{{$opportunity->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="defaultModalLabel"> تعديل بيانات الشركة</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('opportunity.update',$opportunity->id)}}" method='post' enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                          
                            <div class="container">
                              <div class="row">
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  اسم الشركة  </label>
                                  <input type="text" name="company_name" value="{{$opportunity->company_name}}" class="form-control" id="inputPassword4" >
                              
                                </div>
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  لوجو الشركة  </label>
                                  <input type="file" name="logo"  class="form-control"  id="inputPassword4" >
                              
                                </div>
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  المسمي الوظيفي  </label>
                                  <input type="text" name="title" value="{{$opportunity->title}}" class="form-control" id="inputPassword4" >
                              
                                </div>
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4">  رابط الشركة  </label>
                                  <input type="text" name="link" value="{{$opportunity->link}}" class="form-control" id="inputPassword4" >
                              
                                </div>
                               
          
                                  <div class="modal-body col-md-6"> 
                                    <label for="inputPassword4">  تاريخ البداية  </label>
                                    <input type="date" name="start" value="{{$opportunity->start}}" class="form-control" id="inputPassword4" >
                                
                                  </div>
                                  <div class="modal-body col-md-6" > 
                                    <label for="inputPassword4">  تاريخ النهاية  </label>
                                    <input type="date" name="end" value="{{$opportunity->end}}" class="form-control" id="inputPassword4" >
                                
                                  </div>
                             
                                
                                <div class="modal-body col-md-12"> 
                                  <label for="inputPassword4"> التفاصيل   </label>
                                  <textarea type="text" id="myTextarea" name="description"  class="form-control" rows="3" id="inputPassword4" >{!!$opportunity->description!!}</textarea>
                              
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
                      <form action="{{route('opportunity.store')}}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                          <div class="row">
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  اسم الشركة  </label>
                              <input type="text" name="company_name"  class="form-control" id="inputPassword4" >
                          
                            </div>
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  لوجو الشركة  </label>
                              <input type="file" name="logo"  class="form-control" id="inputPassword4" >
                          
                            </div>
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  المسمي الوظيفي  </label>
                              <input type="text" name="title"  class="form-control" id="inputPassword4" >
                          
                            </div>
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  رابط الشركة  </label>
                              <input type="text" name="link"  class="form-control" id="inputPassword4" >
                          
                            </div>
                           
      
                              <div class="modal-body col-md-6"> 
                                <label for="inputPassword4">  تاريخ البداية  </label>
                                <input type="date" name="start"  class="form-control" id="inputPassword4" >
                            
                              </div>
                              <div class="modal-body col-md-6" > 
                                <label for="inputPassword4">  تاريخ النهاية  </label>
                                <input type="date" name="end"  class="form-control" id="inputPassword4" >
                            
                              </div>
                         
                            
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4"> التفاصيل   </label>
                              <textarea type="text" id="myTextarea" name="description"  class="form-control" rows="3" id="inputPassword4" ></textarea>
                          
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



<div class="modal fade" id="setting" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="defaultModalLabel">  الاعدادات </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('admin/enable_expired')}}" method='post' enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
        <input type="radio" @checked($enable == 1) id="option1" name="enable" value="1">
        <label for="option1">اظهار الوظائف منتهية الصلاحية :</label>

        </div>
        
        <div class="modal-body">
        <input type="radio" id="option2" @checked($enable == 0) name="enable" value="0">
        <label for="option2">عدم اظهار الوظائف منتهية الصلاحية :</label>

        </div>

        
      <div class="modal-footer">
        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn mb-2 btn-primary"> تاكيد</button>
      </div>
      </form>
    </div>
  </div>
</div>


  @endsection