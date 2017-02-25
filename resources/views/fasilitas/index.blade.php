@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('fasilitas','active')
@section('content')

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bungalow
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Facilities</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Facilities</h3>
                        <a href="{{ url('/fasilitas/create') }}" class="btn btn-default" title="Add New Bungalow"><li class="fa fa-plus"></li> Add New Facilities</a>
                    </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Name </th><th> Description </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fasilitas as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td><td>{{ $item->keterangan }}</td>
                                        <td>
                                            <a href="{{ url('/fasilitas/' . $item->id) }}" class="btn btn-default" title="View Bungalow">
                                            <i class="fa fa-eye"></i></a>
                                            <a href="{{ url('/fasilitas/' . $item->id . '/edit') }}" class="btn btn-default" title="Edit Bungalow">
                                            <li class="fa fa-edit"></li></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/fasilitas', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<li class="fa fa-trash-o"></li>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default',
                                                        'title' => 'Delete Bungalow',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $fasilitas->render() !!} </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  @endsection