@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Bungalow_Pesan</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/bungalow_pesan', 'class' => 'form-horizontal', 'files' => true]) !!}

                                    <div class="form-group {{ $errors->has('bungalow_id') ? 'has-error' : ''}}">
                {!! Form::label('bungalow_id', 'Bungalow Id', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('bungalow_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bungalow_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pesan_id') ? 'has-error' : ''}}">
                {!! Form::label('pesan_id', 'Pesan Id', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('pesan_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pesan_id', '<p class="help-block">:message</p>') !!}
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