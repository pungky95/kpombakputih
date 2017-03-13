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
              {!! Form::open(['url' => '/blog', 'files' => true]) !!}
                <div class="col-xs-20">
                  <input type="text" name="nama" class="form-control" placeholder="Title">
                </div>
                <br>
                <div class="col-xs-20">
                  <input type="file" name="image" class="form-control">
                </div>
                <br>
                <div class="form-group">
                <select name="kategori" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Choose Category</option>
                  <option>Hotel Reviews</option>
                  <option>Travel Tips</option>
                  <option>Around the world</option>
                  <option>Facilities</option>
                  <option>Travel and Food</option>
                  <option>Miscellaneous</option>
                </select>
              </div>
                <br>
                <textarea name="konten" class="textarea" placeholder="Write Content Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                {!! Form::submit('Post', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
              {!! Form::close() !!}
            </div>
          </div>
</div>
@endsection