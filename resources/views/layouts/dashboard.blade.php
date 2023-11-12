<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Afaaq Dashboard</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('css/feather.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('css/uppy.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/quill.snow.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('css/app-light.css')}}" id="lightTheme">
    <link rel="stylesheet" href="{{asset('css/app-dark.css')}}" id="darkTheme" disabled>

    <link href="node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

  </head>
  <style>
   body {
    font-family: 'Tajawal', sans-serif;
  font-weight: 700; /* استخدام النمط السميك */  }
  aside{
    font-family: 'Tajawal', sans-serif;
  font-weight: 700; /* استخدام النمط السميك */
  }


  </style>
  <body class="vertical  light rtl ">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>

        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="{{asset('')}}#" id="modeSwitcher" data-mode="light">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="{{asset('')}}./#" data-toggle="modal" data-target=".modal-shortcut">
              <span class="fe fe-grid fe-16"></span>
            </a>
          </li>
          <!--<li class="nav-item nav-notif">-->
          <!--  <a class="nav-link text-muted my-2" href="{{asset('')}}./#" data-toggle="modal" data-target=".modal-notif">-->
          <!--    <span class="fe fe-bell fe-16"></span>-->
          <!--    <span class="dot dot-md bg-success"></span>-->
          <!--  </a>-->
          <!--</li>-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="{{asset('')}}#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                                <img src="{{asset('front/img/afaq.png')}}" alt="..." class="avatar-img rounded-circle">

              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                
                              <a  href="" class="dropdown-item" data-toggle="modal" data-target="#user">   تعديل البيانات الشخصية   </a>

              <a  class="dropdown-item"
                  onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"
              >تسجيل الخروج</a>

            </div>
          </li>
        </ul>
      </nav>
      
      
      
      
      
      
      
      
            <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel"> تعديل البيانات الشخصية </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('admin/userUpdate')}}" method='post' enctype="multipart/form-data">
              @csrf
              <div class="container">
                <div class="row">
                  <div class="modal-body col-md-12"> 
                    <label for="inputPassword4">  اسم المستخدم  </label>
                    <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" id="inputPassword4" >
                
                  </div>
                
                 
                  <div class="modal-body col-md-12"> 
                    <label for="inputPassword4">  البريد الالكتروني   </label>
                    <input type="text" name="email" value="{{auth()->user()->email}}"  class="form-control" id="inputPassword4" >
                
                  </div>

                  <div class="modal-body col-md-12"> 
                    <label for="inputPassword4">  كلمة السر   </label>
                    <input type="password"  autocomplete="off"  name="password"  class="form-control" id="inputPassword4" >
                
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

      
      
      
      
      
      
      
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="{{asset('')}}#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('index')}}">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href=""  class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">الرئيسية</span><span class="sr-only">(current)</span>
              </a>

            </li>
          </ul> --}}
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="{{route('routes.index')}}"  class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">المسارات</span><span class="sr-only">(current)</span>
              </a>

            </li>
          </ul>
          
          <ul class="navbar-nav flex-fill w-100 mb-2">
            
            <li class="nav-item dropdown">
              <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-shield fe-16"></i>
                <span class="ml-3 item-text">مسار التوظيف</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="auth">
                <a class="nav-link pl-3" href="{{route('opportunity.index')}}"><span class="ml-1"> الفرص الوظيفية الشاغرة</span></a>
                <a class="nav-link pl-3" href="{{route('company.index')}}"><span class="ml-1"> قائمة باسماء الشركات</span></a>
              </ul>
            </li>
            
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="{{route('training.index')}}"  class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">مسار التدريب</span><span class="sr-only">(current)</span>
              </a>

            </li>
          </ul>
      
          <ul class="navbar-nav flex-fill w-100 mb-2">
            
            <li class="nav-item dropdown">
              <a href="#learn" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-shield fe-16"></i>
                <span class="ml-3 item-text">مسار التعليم</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="learn">
                <a class="nav-link pl-3" href="{{route('postgraduate.index')}}"><span class="ml-1"> فرص الدراسات العليا    </span></a>
                <a class="nav-link pl-3" href="{{route('scholarship.index')}}"><span class="ml-1"> الابتعاث الخارجي </span></a>
                <a href="{{route('servant.index')}}"  class="nav-link pl-3" ><span class="ml-1">  برنامج خادم الحرمين الشريفين للابتعاث </span></a>


                
              </ul>
            </li>
            
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="{{route('article.index')}}"  class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">المقالات</span><span class="sr-only">(current)</span>
              </a>

            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="{{route('contacts.index')}}"  class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">تواصل معنا </span><span class="sr-only">(current)</span>
              </a>

            </li>
          </ul>






        </nav>
      </aside>
      <main role="main" class="main-content">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @yield('content')


      </main> <!-- main -->
    </div> <!-- .wrapper -->

    <form id="logoutForm" action="{{ route('logout') }}" method="post" style="display: none">
        @csrf
    </form>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/simplebar.min.js')}}"></script>
    <script src='{{asset('js/daterangepicker.js')}}'></script>
    <script src='{{asset('js/jquery.stickOnScroll.js')}}'></script>
    <script src="{{asset('js/tinycolor-min.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>
    <script src="{{asset('js/d3.min.js')}}"></script>
    <script src="{{asset('js/topojson.min.js')}}"></script>
    <script src="{{asset('js/datamaps.all.min.js')}}"></script>
    <script src="{{asset('js/datamaps-zoomto.js')}}"></script>
    <script src="{{asset('js/datamaps.custom.js')}}"></script>
    <script src="{{asset('js/Chart.min.js')}}"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{asset('js/gauge.min.js')}}"></script>
    <script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/apexcharts.min.js')}}"></script>
    <script src="{{asset('js/apexcharts.custom.js')}}"></script>
    <script src='{{asset('js/jquery.mask.min.js')}}'></script>
    <script src='{{asset('js/select2.min.js')}}'></script>
    <script src='{{asset('js/jquery.steps.min.js')}}'></script>
    <script src='{{asset('js/jquery.validate.min.js')}}'></script>
    <script src='{{asset('js/jquery.timepicker.js')}}'></script>
    <script src='{{asset('js/dropzone.min.js')}}'></script>
    <script src='{{asset('js/uppy.min.js')}}'></script>
    <script src='{{asset('js/quill.min.js')}}'></script>
    <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
    <script>
     tinymce.init({
    selector: '#myTextarea',
    plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
    menubar: 'file edit view insert format tools table help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    toolbar_sticky: true,
    autosave_ask_before_unload: true,
    autosave_interval: '30s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
    image_advtab: true,
    link_list: [
      { title: 'My page 1', value: 'https://www.codexworld.com' },
      { title: 'My page 2', value: 'http://www.codexqa.com' }
    ],
    image_list: [
      { title: 'My page 1', value: 'https://www.codexworld.com' },
      { title: 'My page 2', value: 'http://www.codexqa.com' }
    ],
    image_class_list: [
      { title: 'None', value: '' },
      { title: 'Some class', value: 'class-name' }
    ],
    importcss_append: true,
    file_picker_callback: (callback, value, meta) => {
      /* Provide file and text for the link dialog */
      if (meta.filetype === 'file') {
        callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
      }
  
      /* Provide image and alt text for the image dialog */
      if (meta.filetype === 'image') {
        callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
      }
  
      /* Provide alternative source and posted for the media dialog */
      if (meta.filetype === 'media') {
        callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
      }
    },
    templates: [
      { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
      { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
      { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
    ],
    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
    height: 400,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_class: 'mceNonEditable',
    toolbar_mode: 'sliding',
    contextmenu: 'link image table',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});
    </script>
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="{{asset('js/apps.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
