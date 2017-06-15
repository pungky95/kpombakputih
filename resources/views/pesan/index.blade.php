@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('pesan','active')
@section('content')

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Booking
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Booking</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Booking</h3>
                        <a href="{{ url('/pesan/create') }}" class="btn btn-default" title="Add New Booking"><li class="fa fa-plus"></li> Add New Booking</a>
                    </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Customer Name </th><th> Check In </th><th> Check out </th><th> Children </th><th> Adults </th><th> Special Request </th><th> Phone </th><th> Email </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pesan as $item)
                                    <tr>
                                        <td>{{ $item->nama_pemesan }}</td><td> {{ $item->tgl_masuk }}</td><td>{{ $item->tgl_keluar }}</td><td>{{ $item->jumlah_anak }}</td><td>{{ $item->jumlah_dewasa }}</td><td>{{ $item->permintaan_khusus }}</td><td>{{ $item->no_telepon }}</td><td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ url('/pesan/' . $item->id) }}" class="btn btn-default" title="View ">
                                            <i class="fa fa-eye"></i></a>
                                            <a href="{{ url('/pesan/' . $item->id . '/edit') }}" class="btn btn-default" title="Edit ">
                                            <li class="fa fa-edit"></li></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/pesan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<li class="fa fa-trash-o"></li>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default',
                                                        'title' => 'Delete Booking',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pesan->render() !!} </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  @endsection
