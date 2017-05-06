@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('fasilitas','active')
@section('content')
<div class="content-wrapper" style="min-height: 946px;">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add New Facility
                <small>Write name facility and description </small>
              </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                Drag and Drop Images here or Click to Choose Images to Upload
                <br>
                {!! Form::model($fasilitas, [
                            'method' => 'PATCH',
                            'url' => ['/fasilitas', $fasilitas->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
                    <div class="col-xs-20">
                        <input type="text" name="nama" class="form-control" value="{{$fasilitas->nama}}">
                    </div>
                    <br>
                    Select Images <input multiple="1" onchange="readURL(this);" id="uploadedImages" name="file" type="file">
                    <div class="col-xs-20" id ="up_images">
                    <input type="hidden" name="fasilitas" value="{{$fasilitas->id}}">
                        @foreach($galeri as $items)
                            <img src="{{asset($items->path)}}" style="width: 200px; height: 200px; object-fit: cover;" name="galeri" value="{{$items->id}}">
                            <br>
                            <a href="{{url('/destroygaleri/'.$items->id)}}">Remove This Image</a>
                        @endforeach  
                    </div>
                    <br>
                    <textarea name="keterangan" class="textarea" placeholder="Write Description Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$fasilitas->keterangan}}</textarea>
                    {!! Form::submit('Update Facility', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
                {!! Form::close() !!}
            </div>
    </div>
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