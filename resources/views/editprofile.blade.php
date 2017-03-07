@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('dashboard','active')
@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Edit Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset("images/user2-160x160.jpg")}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

              <p class="text-muted text-center">Owner</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Profile</h3>
            </div>
            {!! Form::open(['route' => ['editprofile/{id}', $user]]) !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="{{Auth::user()->email}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Change Photo Profile</label>
                  <input type="file" name="image" id="image">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            {!! Form::close() !!}
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
