@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bungalow_Pesan {{ $bungalow_pesan->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('bungalow_pesan/' . $bungalow_pesan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Bungalow_Pesan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['bungalow_pesan', $bungalow_pesan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Bungalow_Pesan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $bungalow_pesan->id }}</td>
                                    </tr>
                                    <tr><th> Bungalow Id </th><td> {{ $bungalow_pesan->bungalow_id }} </td></tr><tr><th> Pesan Id </th><td> {{ $bungalow_pesan->pesan_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection