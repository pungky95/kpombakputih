@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('blog','active')
@section('content')
<div class="content-wrapper" style="min-height: 946px;">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Create New Post
                <small>Write Creative Things</small>
              </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              {!! Form::model($blog, [
                            'method' => 'PATCH',
                            'url' => ['/blog', $blog->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
                <div class="col-xs-20">
                Title <input type="text" value="{{$blog->judul}}" name="nama" class="form-control" placeholder="Title">
                </div>
                <br>
                <div class="col-xs-20">
                  <img src="{{asset($blog->path)}}" style=" width: 200px; object-fit: cover;">
                </div>
                <br>
                <div class="col-xs-20">
                <input type="file" value="{{asset($blog->path)}}" name="image" class="form-control">
                </div>
                <br>
                <div class="col-xs-20">
                <select name="kategori" class="form-control select2">
                  @foreach($kategori as $items)
                  @if($items->nama == $blog->kategori)
                  <option selected="selected">{{$items->nama}}</option>
                  @else
                  <option>{{$items->nama}}</option>
                  @endif
                  @endforeach
                </select>
                </div>
                <br>
                <textarea name="konten" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$blog->konten!!}</textarea>
                {!! Form::submit('Update', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
              {!! Form::close() !!}
            </div>
          </div>
</div>
@endsection