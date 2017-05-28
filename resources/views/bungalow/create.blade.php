@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('bungalow','active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bungalow
        <small>Add New Bungalow</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Bungalow</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
            @include('bungalow.form')
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
  <script type="text/javascript">
    Dropzone.options.mydropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 10, // MB
};
  </script>
@endsection
