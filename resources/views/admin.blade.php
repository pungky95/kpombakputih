@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('content')

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("adminlte/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- pungky -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{ url('/admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/bungalow')}}">
            <i class="fa fa-bed"></i>
            <span>Bungalows</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/fasilitas')}}">
            <i class="fa fa-tv"></i>
            <span>Facilities</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/galeri')}}">
            <i class="fa fa-photo"></i>
            <span>Gallery</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/kegiatan')}}">
            <i class="fa fa-bicycle"></i>
            <span>Activity</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/blog')}}">
            <i class="fa fa-file-text-o"></i>
            <span>Blog</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/kontak')}}">
            <i class="fa fa-phone"></i>
            <span>Contact</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/pesan')}}">
            <i class="fa fa-book"></i>
            <span>Booking</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/testimoni')}}">
            <i class="fa fa-users"></i>
            <span>Testimonial</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $pesan }}</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <a href="{{ url('/pesan') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">            
              <h3>{{ Counter::allHits() }}</h3>
              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
