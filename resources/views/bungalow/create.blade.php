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
              {!! Form::open(['url' => url('/bungalow'), 'files' => true]) !!}
                <label>Bungalow Name</label>
                <input type="text" name="nama" class="form-control" placeholder="Name">
                <label>Image Upload</label>
                <input type="file" name="images[]" class="form-control" multiple>
                <label>Facilities</label>
                <select class="form-control select2" multiple="multiple" name="fasilitas[]" data-placeholder="Select Facilities" style="width: 100%;">
                  @foreach($fasilitas as $items)
                  <option>{{ $items->nama }}</option>
                  @endforeach
                </select>
                <label>High Season</label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_high" class="form-control">
                <span class="input-group-addon">.00</span>
                </div>
                <label>Low Season</label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_low" class="form-control">
                <span class="input-group-addon">.00</span>
                </div>
                <label>Jumlah Kamar</label>
                <input type="number" min="1" name="jumlah_kamar" class="form-control">
                <label>Description</label>
                <textarea name="keterangan" class="textarea" placeholder="Write Description Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                {!! Form::submit('Add', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
@endsection
