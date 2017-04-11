@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('galeri','active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gallery
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Gallery</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Select Category First</h3>
                    </div>
                    <div class="box-body">
                    <select onchange="getval(this);" name="kategori" class="form-control select2" style="width: 100%;">
                            <option selected="selected">Choose Images Category</option>
                            @foreach($kategori as $items)
                            <option>{{$items->nama}}</option>
                            @endforeach
                    </select>
                    <br>
                        <div id="form" style="display:none;">
                            {!! Form::open(['url' => url('/galeri'),'enctype'=>'multipart/form-data', 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}
                            <input type="hidden" name="kategori" id="kategori" value="uncategorize">
                            {!! Form::close() !!} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  <script type="text/javascript">
    function getval(sel){
        $('#kategori').val(sel.value);
        if(sel.value=='Choose Images Category')
        $("#form").hide();
        else
        $("#form").show();
    }
    Dropzone.options.realDropzone = {
    maxFilesize: 8,
    dictFileTooBig: 'Image is bigger than 8MB',

    
    }
  </script>
  @endsection
