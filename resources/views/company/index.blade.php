@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
<div class="row">
    <div class="col-md-12 my-4">
      <h2 class="h4 mb-1"> قائمة باسماء الشركات</h2>
      <br>
      {{-- <p class="mb-3">Child rows with additional detailed information</p> --}}
      <div class="card shadow">
        <div class="card-header">
          <a type="button" href="" class="btn mb-2 btn btn-primary" data-toggle="modal" data-target="#defaultModal">   اضافة شركة  </a>
          <a type="button" href="" class="btn mb-2 btn btn-primary" data-toggle="modal" data-target="#upload">    رفع ملف اكسيل   </a>
          <a type="button" href="" class="btn mb-2 btn btn-danger" data-toggle="modal" data-target="#deleteAll">    حذف الكل     </a>

        </div>
        <div class="card-body">
          <!-- table -->
          <table class="table table-hover table-borderless border-v">
            <thead class="thead-dark">
              <tr>
       
                <th>م</th>
                <th>لوجو الشركة</th>
                <th>اسم الشركة</th>
                <th>النوع </th>               
                <th>الرابط </th>               
                <th>العمليات</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">

                <td>{{$loop->iteration}}</td>
                <td>
                  <img src="{{asset('images/'. $company->logo)}}" width="100px" alt="">
                 </td>              
                <td>{{$company->name}}</td>
                <td>{{$company->type}}</td>
                <td>
                  <a href="{{$company->link}}">زيارة الموقع</a>
                </td>
                
               
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="text-muted sr-only">Action</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#defaultModal{{$company->id}}">   تعديل  </a>
                  <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#delete{{$company->id}}">   حذف  </a>
                 
                </div>
                
              </td>


              <div class="modal fade" id="delete{{$company->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="defaultModalLabel"> هل انت متاكد من عملية الحذف ؟ </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('company.destroy',$company->id)}}" method='post' enctype="multipart/form-data">
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
                    <div class="modal fade" id="defaultModal{{$company->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="defaultModalLabel"> تعديل بيانات الشركة</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('company.update',$company->id)}}" method='post' enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="modal-body"> 
                              <label for="inputPassword4"> اسم الشركة  </label>
                              <input type="text" name="name" value="{{$company->name}}" class="form-control" id="inputPassword4" >
                          
                            </div>
                            <div class="modal-body col-md-12"> 
                              <label for="inputPassword4">  لوجو الشركة  </label>
                              <input type="file" name="logo"  class="form-control"  id="inputPassword4" >
                          
                            </div>
                            <div class="modal-body"> 
                              <label for="inputPassword4"> النوع   </label>
                              <input type="text" name="type" value="{{$company->type}}" class="form-control" id="inputPassword4" >
                          
                            </div>
                            <div class="modal-body"> 
                              <label for="inputPassword4"> لينك الشركة   </label>
                              <input type="text" name="link" value="{{$company->link}}" class="form-control" id="inputPassword4" >
                          
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
                      <form action="{{route('company.store')}}" method='post' enctype="multipart/form-data">
                        @csrf
                      <div class="modal-body"> 
                        <label for="inputPassword4"> اسم الشركة  </label>
                        <input type="text" name="name"  class="form-control" id="inputPassword4" >
                    
                      </div>
                      <div class="modal-body col-md-12"> 
                        <label for="inputPassword4">  لوجو الشركة  </label>
                        <input type="file" name="logo"  class="form-control"  id="inputPassword4" >
                    
                      </div>
                      <div class="modal-body"> 
                        <label for="inputPassword4"> النوع   </label>
                        <input type="text" name="type"  class="form-control" id="inputPassword4" >
                    
                      </div>
                      <div class="modal-body"> 
                        <label for="inputPassword4"> لينك الشركة   </label>
                        <input type="text" name="link"  class="form-control" id="inputPassword4" >
                    
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





<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="defaultModalLabel"> رفع ملف اكسيل </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('file_upload')}}" method='post' enctype="multipart/form-data">
        @csrf
     
      <div class="modal-body col-md-12"> 
        <label for="inputPassword4">  الملف   </label>
        <input type="file" name="file"  class="form-control"  id="inputPassword4" >
    
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn mb-2 btn-primary"> تاكيد</button>
      </div>
      </form>
    </div>
  </div>
</div>




<div class="modal fade" id="deleteAll" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="defaultModalLabel"> هل انت متاكد من عملية الحذف لكل العناصر؟ </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('admin/company_delete_all')}}" method='post' enctype="multipart/form-data">
        @csrf
       
      <div class="modal-footer">
        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn mb-2 btn-primary"> تاكيد</button>
      </div>
      </form>
    </div>
  </div>
</div>
  @endsection