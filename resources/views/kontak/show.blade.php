@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kontak {{ $kontak->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('kontak/' . $kontak->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Kontak"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['kontak', $kontak->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Kontak',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kontak->id }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td> {{ $kontak->nama }} </td></tr><tr><th> Email </th><td> {{ $kontak->email }} </td></tr><tr><th> Pesan </th><td> {{ $kontak->pesan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection