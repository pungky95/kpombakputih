@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Blog {{ $blog->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($blog, [
                            'method' => 'PATCH',
                            'url' => ['/blog', $blog->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                                    <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}}">
                {!! Form::label('konten', 'Konten', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::textarea('konten', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('konten', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('konten1') ? 'has-error' : ''}}">
                {!! Form::label('konten', 'Konten1', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::textarea('konten1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('konten1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}}">
                {!! Form::label('qoute', 'Qoute', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::textarea('qoute', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('qoute', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('kategori') ? 'has-error' : ''}}">
                {!! Form::label('kategori', 'Kategori', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('kategori', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('kategori', '<p class="help-block">:message</p>') !!}
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