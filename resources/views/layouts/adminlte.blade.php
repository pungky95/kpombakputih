<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{{{ asset('images/gallery/favicon.png') }}}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset("plugins/daterangepicker/daterangepicker.css")}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset("plugins/datepicker/datepicker3.css")}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset("plugins/iCheck/all.css")}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset("plugins/colorpicker/bootstrap-colorpicker.min.css")}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{asset("plugins/timepicker/bootstrap-timepicker.min.css")}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset("plugins/select2/select2.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("css/AdminLTE.min.css")}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset("css/skins/_all-skins.min.css")}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Drop Zone -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
  <!-- Sweet Alert -->
  <link href="{{ asset("css/sweetalert.css") }}" rel='stylesheet' type='text/css'>
  </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="{{url('/admin')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>OP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin </b>Ombak Putih</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="@if(Auth::user()){{ asset(Auth::user()->foto)}}@endif" class="user-image" alt="User Image">
              <span class="hidden-xs">@if(Auth::user()){{Auth::user()->name}}@endif</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="@if(Auth::user()){{ asset(Auth::user()->foto)}}@endif" class="img-circle" alt="User Image">

                <p>
                  @if(Auth::user()){{Auth::user()->name}}@endif
                  <small>Admin since @if(Auth::user()){{Auth::user()->created_at->format('M. Y')}}@endif</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ url('/editprofile') }}" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="@if(Auth::user()){{ asset(Auth::user()->foto)}}@endif" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>@if(Auth::user()){{ Auth::user()->name }}@endif</p>
          <a href="{{ url('/editprofile') }}"><i class="fa fa-book"></i> Edit Profile</a>
        </div>
      </div>
      
      <!-- pungky -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="@yield('dashboard') treeview">
          <a href="{{ url('/admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="@yield('bungalow') treeview">
          <a href="{{ url('/bungalow')}}">
            <i class="fa fa-bed"></i>
            <span>Bungalows</span>
          </a>
        </li>
        <li class="@yield('fasilitas') treeview">
          <a href="{{ url('/fasilitas')}}">
            <i class="fa fa-tv"></i>
            <span>Facilities</span>
          </a>
        </li>
        <li class="@yield('galeri') treeview">
          <a href="{{ url('/galeri')}}">
            <i class="fa fa-photo"></i>
            <span>Gallery</span>
          </a>
        </li>
        <li class="@yield('blog') treeview">
          <a href="{{ url('/blog')}}">
            <i class="fa fa-file-text-o"></i>
            <span>Blog</span>
          </a>
        </li>
        <li class="@yield('kontak') treeview">
          <a href="{{ url('/kontak')}}">
            <i class="fa fa-phone"></i>
            <span>Contact</span>
          </a>
        </li>
        <li class="@yield('pesan') treeview">
          <a href="{{ url('/pesan')}}">
            <i class="fa fa-book"></i>
            <span>Booking</span>
          </a>
        </li>
        <li class="@yield('testimoni') treeview">
          <a href="{{ url('/testimoni')}}">
            <i class="fa fa-users"></i>
            <span>Testimonial</span>
          </a>
        </li>
        <li class="@yield('komentar') treeview">
          <a href="{{ url('/komentar')}}">
            <i class="fa fa-comments"></i>
            <span>Comment</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  @yield('content')
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Pungky &amp; Welly </a>.</strong> All rights
    reserved.
  </footer>
</div>

<!-- jQuery 2.2.3 -->
<script src="{{asset("plugins/jQuery/jquery-2.2.3.min.js")}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>
<!-- Select2 -->
<script src="{{asset("plugins/select2/select2.full.min.js")}}"></script>
<!-- InputMask -->
<script src="{{asset("plugins/input-mask/jquery.inputmask.js")}}"></script>
<script src="{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
<script src="{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset("plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset("plugins/datepicker/bootstrap-datepicker.js")}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset("plugins/colorpicker/bootstrap-colorpicker.min.js")}}"></script>
<!-- bootstrap time picker -->
<script src="{{asset("plugins/timepicker/bootstrap-timepicker.min.js")}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset("plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset("plugins/iCheck/icheck.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("plugins/fastclick/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("js/app.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("js/demo.js")}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
<!-- Dropzone -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
<!-- Sweet Alert -->
<script src="{{ asset("js/sweetalert.min.js") }}"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
<script>
  $(function () {
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
</body>
</html>