@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bungalow_Fasilita {{ $bungalow_fasilita->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('bungalow_fasilitas/' . $bungalow_fasilita->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Bungalow_Fasilita"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['bungalow_fasilitas', $bungalow_fasilita->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Bungalow_Fasilita',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $bungalow_fasilita->id }}</td>
                                    </tr>
                                    <tr><th> Bungalow Id </th><td> {{ $bungalow_fasilita->bungalow_id }} </td></tr><tr><th> Fasilitas Id </th><td> {{ $bungalow_fasilita->fasilitas_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection