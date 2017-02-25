@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('blog','active')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Blog</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Blog</h3>
                        <a href="{{ url('/blog/create') }}" class="btn btn-default" title="Add New Blog"><li class="fa fa-plus"></li> Add New Blog</a>
                    </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th> Content </th>
                                        <th> Category </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blog as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td> {{ $item->konten }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>
                                            <a href="{{ url('/blog/' . $item->id) }}" class="btn btn-default" title="View ">
                                            <i class="fa fa-eye"></i></a>
                                            <a href="{{ url('/blog/' . $item->id . '/edit') }}" class="btn btn-default" title="Edit ">
                                            <li class="fa fa-edit"></li></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/blog', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<li class="fa fa-trash-o"></li>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-default',
                                                        'title' => 'Delete Blog',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $blog->render() !!} </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  @endsection
