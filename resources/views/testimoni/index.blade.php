@extends('layouts.adminlte')
<!DOCTYPE html>
<html>
<head>
  @section('title','Admin Dashboard')
</head>




<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@section('nav')

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
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- pungky -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ url('/admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview">
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
        Testimonial
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Testimonial</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Testimonial</h3>
                        <a href="{{ url('/testimoni/create') }}" class="btn btn-default" title="Add New Testimonial"><li class="fa fa-plus"></li> Add New Testimonial</a>
                    </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Name </th><th> Konten </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($testimoni as $item)
                                    <tr>
                                        <td>{{ $item->nama_tamu }}</td><td> {{ $item->konten }}</td>
                                        <td>
                                            <a href="{{ url('//' . $item->id) }}" class="btn btn-default" title="View ">
                                            <i class="fa fa-eye"></i></a>
                                            <a href="{{ url('//' . $item->id . '/edit') }}" class="btn btn-default" title="Edit ">
                                            <li class="fa fa-edit"></li></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/testimoni', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<li class="fa fa-trash-o"></li>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default',
                                                        'title' => 'Delete Testimonial',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $testimoni->render() !!} </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  @endsection
  @section('footer')
</div>
</body>
</html>
@endsection
