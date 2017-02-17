@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Galeri</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                       {!! Form::open(['url' => '/galeri', 'class' => 'form-horizontal', 'files' => true]) !!}
                <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                    {!! Form::label('image', 'image', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::file('image', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
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