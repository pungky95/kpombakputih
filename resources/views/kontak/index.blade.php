@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('kontak','active')
@section('content')

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Contact</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Contact</h3>
                    </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Name </th><th> Email </th><th> Phone </th><th> Message </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kontak as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td><td> {{ $item->email }}</td><td>{{ $item->phone }}</td><td>{{ $item->pesan }}</td>
                                        <td>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/kontak', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<li class="fa fa-trash-o"></li>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default',
                                                        'title' => 'Delete Contact',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $kontak->render() !!} </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  @endsection
