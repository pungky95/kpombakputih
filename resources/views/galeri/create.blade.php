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
        <small>Upload New Album</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Gallery</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Choose Category First</label>
                    <select onchange="getval(this);" name="kategori" class="form-control select2" style="width: 100%;">
                            <option selected="selected">Choose Images Category</option>
                            @foreach($kategori as $items)
                            <option>{{$items->nama}}</option>
                            @endforeach
                    </select>

                    <div id="form" style="display: none;">
                    <label>Upload Size Max 2 MB, Please make sure before upload because process cannot be undone</label>
                    {!! Form::open(['url' => url('/galeri'),'enctype'=>'multipart/form-data', 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}
                            <input type="hidden" name="kategori" id="kategori" value="uncategorize">
                    {!! Form::close() !!} 
                    </div>
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
  </script>
  @endsection
