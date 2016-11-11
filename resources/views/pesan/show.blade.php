@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pesan {{ $pesan->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('pesan/' . $pesan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pesan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['pesan', $pesan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Pesan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pesan->id }}</td>
                                    </tr>
                                    <tr><th> Nama Pemesan </th><td> {{ $pesan->nama_pemesan }} </td></tr><tr><th> Tgl Masuk </th><td> {{ $pesan->tgl_masuk }} </td></tr><tr><th> Tgl Keluar </th><td> {{ $pesan->tgl_keluar }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection