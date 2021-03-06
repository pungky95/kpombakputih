@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Pesan {{ $pesan->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($pesan, [
                            'method' => 'PATCH',
                            'url' => ['/pesan', $pesan->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

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


                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection