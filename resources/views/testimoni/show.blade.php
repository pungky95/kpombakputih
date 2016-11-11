@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Testimoni {{ $testimoni->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('testimoni/' . $testimoni->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Testimoni"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['testimoni', $testimoni->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Testimoni',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $testimoni->id }}</td>
                                    </tr>
                                    <tr><th> Nama Tamu </th><td> {{ $testimoni->nama_tamu }} </td></tr><tr><th> Konten </th><td> {{ $testimoni->konten }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection