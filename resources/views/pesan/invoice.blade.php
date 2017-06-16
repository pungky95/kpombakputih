<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invoice</title>
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
 
  <section class="content-header">
      <h1>
        Invoice
        <small></small>
      </h1>
      <ol class="breadcrumb">
        {{-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li> --}}
      </ol>
    </section>

    <!-- Main content -->
    @foreach($pesan as $items)
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-home"></i> Ombak Putih Bungalows
            <small class="pull-right">@php echo "Date: " . date("d/m/Y"); @endphp</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Koos Buis</strong><br>
            Jalan Pratama 101X, Tanjung Benoa, Nusa Dua<br>
            Bali<br>
            Phone: (+62)81-338-827-281<br>
            Email: dinafur@hotmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>{{$items->nama_pemesan}}</strong><br>
            Phone: {{$items->no_telepon}}<br>
            Email: {{$items->email}}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice </b>{{$items->id}}<br>
          <br>
          <b>Order ID:</b> B{{$items->id}}<br>
          <b>Checkin Due:</b> @php $tgl_masuk = strtotime($items->tgl_masuk); $tgl_masuk=date('d/m/Y',$tgl_masuk); echo $tgl_masuk; @endphp<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Arrival Date</th>
              <th>Departure Date</th>
              <th>Price by Season</th>
              <th>Bungalow</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>@php $tgl_masuk = strtotime($items->tgl_masuk); $tgl_masuk=date('d/m/Y',$tgl_masuk); echo $tgl_masuk; @endphp</td>
              <td>@php $tgl_keluar = strtotime($items->tgl_keluar); $tgl_keluar=date('d/m/Y',$tgl_keluar); echo $tgl_keluar; @endphp</td>
              <td>@php$transdate = date('m-d-Y', time());
                    $month = date('m');
                    if($month > 1 && $month <= 6 ){
                        echo "IDR " . number_format($items->tarif_low,2);
                    } 
                    else 
                    {
                        echo "IDR " .  number_format($items->tarif_high,2);
                    }
                @endphp  </td>
              <td>{{$items->nama}}</td>
             </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->

        <!-- /.col -->
        <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>
                @php$transdate = date('m-d-Y', time());
                    $month = date('m');
                    if($month > 1 && $month <= 6 ){
                        echo "IDR " . number_format($items->tarif_low,2);
                    } 
                    else 
                    {
                        echo "IDR " .  number_format($items->tarif_high,2);
                    }
                @endphp    
                </td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>@php$transdate = date('m-d-Y', time());
                    $month = date('m');
                    if($month > 1 && $month <= 6 ){
                        echo "IDR " . number_format($items->tarif_low,2);
                    } 
                    else 
                    {
                        echo "IDR " .  number_format($items->tarif_high,2);
                    }
                @endphp    </td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{url('/invoice')}}" onclick="window.print();" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <a href="{{url('/')}}" class="btn btn-default"><i class="fa fa-times"></i> Close</a>
          {{-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> --}}
        </div>
      </div>
    </section>
@endforeach
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