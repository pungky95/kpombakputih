@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('komentar','active')
@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Comments
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Comments</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Comments</h3>
                    </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Nama </th>
                                        <th> Email </th>
                                        <th> Website </th>
                                        <th> Konten </th>
                                        <th> Permission </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($komentar as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->website }}</td>
                                        <td>{{ $item->konten }}</td>
                                        <td>
                                            @if($item->permissions == 'accept')
                                            {!! Form::model($item, [
                                            'method' => 'PATCH',
                                            'url' => ['/komentar', $item->id],
                                            'class' => 'form-horizontal',
                                            'files' => true
                                            ]) !!}
                                            <input name="nama" type="hidden" value="{{$item->nama}}">
                                            <input name="email" type="hidden" value="{{$item->email}}">
                                            <input name="website" type="hidden" value="{{$item->website}}">
                                            <input name="konten" type="hidden" value="{{$item->konten}}">
                                            <input name="permissions" type="hidden" value="decline">
                                            {!! Form::button('<li class="fa fa-check"></li>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default',
                                                        'title' => 'Decline this Comment',
                                                        'onclick'=>'return confirm("Confirm Decline?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                            @elseif($item->permissions == 'decline')
                                            {!! Form::model($item, [
                                            'method' => 'PATCH',
                                            'url' => ['/komentar', $item->id],
                                            'class' => 'form-horizontal',
                                            'files' => true
                                            ]) !!}
                                            <input name="nama" type="hidden" value="{{$item->nama}}">
                                            <input name="email" type="hidden" value="{{$item->email}}">
                                            <input name="website" type="hidden" value="{{$item->website}}">
                                            <input name="konten" type="hidden" value="{{$item->konten}}">
                                            <input name="permissions" type="hidden" value="accept">
                                            {!! Form::button('<li class="fa fa-times"></li>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default',
                                                        'title' => 'Accept this Comment',
                                                        'onclick'=>'return confirm("Confirm Accept?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                            @endif
                                        </td>
                                        <td>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/komentar', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<li class="fa fa-trash-o"></li>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default',
                                                        'title' => 'Delete Komentar',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                             <div class="pagination-wrapper"> {!! $komentar->render() !!} </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection