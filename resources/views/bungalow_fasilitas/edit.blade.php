@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Bungalow_Fasilita {{ $bungalow_fasilita->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($bungalow_fasilita, [
                            'method' => 'PATCH',
                            'url' => ['/bungalow_fasilitas', $bungalow_fasilita->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                                    <div class="form-group {{ $errors->has('bungalow_id') ? 'has-error' : ''}}">
                {!! Form::label('bungalow_id', 'Bungalow Id', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('bungalow_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bungalow_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fasilitas_id') ? 'has-error' : ''}}">
                {!! Form::label('fasilitas_id', 'Fasilitas Id', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('fasilitas_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fasilitas_id', '<p class="help-block">:message</p>') !!}
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