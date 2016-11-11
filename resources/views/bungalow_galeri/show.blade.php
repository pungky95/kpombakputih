@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bungalow_Galeri {{ $bungalow_galeri->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('bungalow_galeri/' . $bungalow_galeri->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Bungalow_Galeri"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['bungalow_galeri', $bungalow_galeri->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Bungalow_Galeri',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $bungalow_galeri->id }}</td>
                                    </tr>
                                    <tr><th> Bungalow Id </th><td> {{ $bungalow_galeri->bungalow_id }} </td></tr><tr><th> Galeri Id </th><td> {{ $bungalow_galeri->galeri_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection