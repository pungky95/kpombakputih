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
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Gallery</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Gallery</h3>
                        <a href="{{ url('/galeri/create') }}" class="btn btn-default" title="Add New Photo"><li class="fa fa-plus"></li> Add New Photo</a>
                    </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Photo </th><th> Category </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($galeri as $item)
                                    <tr>
                                        <td><img src="{{ asset($item->foto) }}" style="width: auto; height:50px; position: absolute;"></td><td> {{ $item->kategori }}</td>
                                        <td>
                                            <a href="{{ url('/galeri/' . $item->id) }}" class="btn btn-default" title="View Gallery">
                                            <i class="fa fa-eye"></i></a>
                                            <a href="{{ url('/galeri/' . $item->id . '/edit') }}" class="btn btn-default" title="Edit Gallery">
                                            <li class="fa fa-edit"></li></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/galeri', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<li class="fa fa-trash-o"></li>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default',
                                                        'title' => 'Delete Photo',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $galeri->render() !!} </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  @endsection
