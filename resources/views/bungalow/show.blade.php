@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bungalow {{ $bungalow->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('bungalow/' . $bungalow->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Bungalow"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['bungalow', $bungalow->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Bungalow',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $bungalow->id }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td> {{ $bungalow->nama }} </td></tr><tr><th> Tarif Low </th><td> {{ $bungalow->tarif_low }} </td></tr><tr><th> Tarif High </th><td> {{ $bungalow->tarif_high }} </td></tr><tr><th> Keterangan </th><td> {{ $bungalow->keterangan }} </td></tr><tr><th> Jumlah Kamar </th><td> {{ $bungalow->jumlah_kamar }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection