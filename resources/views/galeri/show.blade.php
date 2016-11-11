@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Galeri {{ $galeri->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('galeri/' . $galeri->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Galeri"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['galeri', $galeri->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Galeri',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $galeri->id }}</td>
                                    </tr>
                                    <tr><th> Kegiatan Id </th><td> {{ $galeri->kegiatan_id }} </td></tr><tr><th> Blog Id </th><td> {{ $galeri->blog_id }} </td></tr><tr><th> Foto </th><td> {{ $galeri->foto }} </td></tr><tr><th> Kategori </th><td> {{ $galeri->kategori }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection