@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('blog','active')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Create New Post</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Blog</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              {!! Form::open(['url' => '/blog', 'files' => true]) !!}
                @if ($errors->has('nama'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Title </label>
                <input type="text" id="inputError" name="nama" class="form-control" placeholder="Title">
                <span class="help-block">{{ $errors->first('nama') }}</span>
                </div>
                @else
                <label> Title </label>
                <input type="text" name="nama" class="form-control" placeholder="Title">
                @endif
                @if ($errors->has('image'))
                 <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Image Upload </label>
                <input type="file" for="inputError" name="image" class="form-control">
                <span class="help-block">{{ $errors->first('image') }}</span>
                </div>
                @else
                <label>Image Upload</label>
                <input type="file" name="image" class="form-control">
                @endif
                @if ($errors->has('kategori'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Category </label>
                <select name="kategori" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Choose Category</option>
                  @foreach($kategori as $items)
                  <option>{{$items->nama}}</option>
                  @endforeach
                </select>
                <span class="help-block">{{ $errors->first('kategori') }}</span>
                </div>
                @else
                <label>Category</label>
                <select name="kategori" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Choose Category</option>
                  @foreach($kategori as $items)
                  <option>{{$items->nama}}</option>
                  @endforeach
                </select>
                @endif
                @if ($errors->has('konten'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Content </label>
                <textarea name="konten" class="textarea" placeholder="Write Content Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                <span class="help-block">{{ $errors->first('content') }}</span>
                </div>
                @else
                <label>Content</label>
                <textarea name="konten" class="textarea" placeholder="Write Content Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                @endif
                {!! Form::submit('Post', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
  @endsection
              