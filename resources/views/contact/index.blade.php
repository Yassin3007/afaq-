@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row">
          <div class="col-md-12 my-4">
            <h2 class="h4 mb-1"> الاعدادات </h2>
            <br>
            {{-- <p class="mb-3">Child rows with additional detailed information</p> --}}
            <div class="card shadow">
              <div class="card-header">
                {{-- <a type="button" href="" class="btn mb-2 btn btn-primary" data-toggle="modal" data-target="#defaultModal">   اضافة مسار  </a> --}}
      
              </div>
              <div class="card-body">
                <!-- table -->
                <table class="table table-hover table-borderless border-v">
                  <thead class="thead-dark">
                    <tr>
             
                      <th> العنوان </th>
                      <th>رقم الهاتف</th>
                      <th>البريد الالكتروني</th>
                      <th>العمليات</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
      
                      <td>{{$setting->address}}</td>
                      <td>{{$setting->phone}}</td>
                      <td>{{$setting->email}}</td>
                      
                     
                      <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        {{-- <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#defaultModal{{$contact->id}}">   تعديل  </a> --}}
                        <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#update">   تعديل  </a>
                       
                      </div>
                      
                    </td>
      
      
                 
      
                          <!-- Button trigger modal -->
                          <!-- Modal -->
                      
                        </tr>
      
                      
                        <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="defaultModalLabel"> تعديل بيانات الشركة</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="{{url('admin/contact_update')}}" method='post' enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body"> 
                                  <label for="inputPassword4"> العنوان   </label>
                                  <input type="text" name="address" value="{{$setting->address}}" class="form-control" id="inputPassword4" >
                              
                                </div>
                               
                                <div class="modal-body"> 
                                  <label for="inputPassword4"> رقم الهاتف   </label>
                                  <input type="text" name="phone" value="{{$setting->phone}}" class="form-control" id="inputPassword4" >
                              
                                </div>
                                <div class="modal-body"> 
                                  <label for="inputPassword4"> البريد الالكتروني    </label>
                                  <input type="text" name="email" value="{{$setting->email}}" class="form-control" id="inputPassword4" >
                              
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
        </div>
<div class="row">
    <div class="col-md-12 my-4">
      <h2 class="h4 mb-1"> الرسائل الواردة</h2>
      <br>
      {{-- <p class="mb-3">Child rows with additional detailed information</p> --}}
      <div class="card shadow">
        <div class="card-header">
          {{-- <a type="button" href="" class="btn mb-2 btn btn-primary" data-toggle="modal" data-target="#defaultModal">   اضافة مسار  </a> --}}

        </div>
        <div class="card-body">
          <!-- table -->
          <table class="table table-hover table-borderless border-v">
            <thead class="thead-dark">
              <tr>
       
                <th>م</th>
                <th>اسم المرسل </th>
                <th>البريد الالكتروني </th>               
                <th>الموضوع</th>
                <th>الرسالة</th>
                <th>العمليات</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">

                <td>{{$loop->iteration}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
                
               
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="text-muted sr-only">Action</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  {{-- <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#defaultModal{{$contact->id}}">   تعديل  </a> --}}
                  <a type="button" class="btn mb-2 dropdown-item" data-toggle="modal" data-target="#delete{{$contact->id}}">   حذف  </a>
                 
                </div>
                
              </td>


              <div class="modal fade" id="delete{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="defaultModalLabel"> هل انت متاكد من عملية الحذف ؟ </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('contacts.destroy',$contact->id)}}" method='post' enctype="multipart/form-data">
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
                
                  </tr>

                @endforeach
                
             

              
            </tbody>
          </table>
          {{$contacts->links()}}
        </div>
      </div>
    </div>
  </div> <!-- end section -->
</div>
</div>
</div>


  @endsection