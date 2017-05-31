@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('fasilitas','active')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Facility
        <small>Edit Facility</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Facility</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              {!! Form::model($fasilitas, [
                            'method' => 'PATCH',
                            'url' => ['/fasilitas', $fasilitas->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
              @if ($errors->has('nama'))
              <div class="form-group has-error">
              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Name of Facility </label>
              <input type="text" id="inputError" name="nama" class="form-control" placeholder="Name of Facility" value="{!!$fasilitas->nama!!}">
              <span class="help-block">{{ $errors->first('nama') }}</span>
              </div>
              @else
                <label>Name of Facility</label>
                <input type="text" name="nama" class="form-control" placeholder="Name of Facility" value="{!!$fasilitas->nama!!}"> 
              @endif
                <label>Upload Images</label>        
                <input multiple onchange="readURL(this);" id="uploadedImages" name="file" type="file">
                <div id ="up_images">
                <input type="hidden" name="fasilitas" value="{{$fasilitas->id}}">
                    @foreach($galeri as $items)                            
                        <img src="{{asset($items->path)}}" style="width: 200px; height: 200px; object-fit: cover;" name="galeri" value="{{$items->id}}">
                        <br>
                        <a href="{{url('/destroygaleri/'.$items->id)}}">Remove This Image</a>
                    @endforeach  
                </div>
                <input type="hidden" name="kategori" value="10">
                @if($errors->has('keterangan'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Descriptions of Facility </label>
                <textarea name="keterangan" class="textarea" placeholder="Write Description of Facility Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$fasilitas->keterangan!!}</textarea>
                <span class="help-block">{{ $errors->first('keterangan') }}</span>
                </div>
                @else
                <label> Descriptions of Facility </label>
                <textarea name="keterangan" class="textarea" placeholder="Write Description of Facility Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$fasilitas->keterangan!!}</textarea>
                @endif
                {!! Form::submit('Update', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
    

<script type="text/javascript">

  var readURL = function(input) {
      $('#up_images').empty();   
      var number = 0;
      $.each(input.files, function(value) {
          var reader = new FileReader();
          reader.onload = function (e) {
              var id = (new Date).getTime();
              number++;
              $('#up_images').prepend('<img id='+id+' src='+e.target.result+' width="200px" height="200px" data-index='+number+' onclick="removePreviewImage('+id+')" style="object-fit: cover; "/>')
          };
          reader.readAsDataURL(input.files[value]);
          }); 
    }

</script>
@endsection