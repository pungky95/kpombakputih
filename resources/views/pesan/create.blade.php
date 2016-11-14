@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Pesan</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/pesan', 'class' => 'form-horizontal', 'files' => true]) !!}

                                    <div class="form-group {{ $errors->has('nama_pemesan') ? 'has-error' : ''}}">
                {!! Form::label('nama_pemesan', 'Nama Pemesan', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('nama_pemesan', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nama_pemesan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tgl_masuk') ? 'has-error' : ''}}">
                {!! Form::label('tgl_masuk', 'Tgl Masuk', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::date('tgl_masuk', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tgl_masuk', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tgl_keluar') ? 'has-error' : ''}}">
                {!! Form::label('tgl_keluar', 'Tgl Keluar', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::date('tgl_keluar', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tgl_keluar', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jumlah_anak') ? 'has-error' : ''}}">
                {!! Form::label('jumlah_anak', 'Jumlah Anak', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('jumlah_anak', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('jumlah_anak', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jumlah_dewasa') ? 'has-error' : ''}}">
                {!! Form::label('jumlah_dewasa', 'Jumlah Dewasa', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('jumlah_dewasa', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('jumlah_dewasa', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('permintaan_khusus') ? 'has-error' : ''}}">
                {!! Form::label('permintaan_khusus', 'Permintaan Khusus', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('permintaan_khusus', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('permintaan_khusus', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('no_telepon') ? 'has-error' : ''}}">
                {!! Form::label('no_telepon', 'Telephone', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('no_telepon', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('no_telepon', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection