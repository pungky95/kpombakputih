@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Blog {{ $blog->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('blog/' . $blog->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Blog"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['blog', $blog->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Blog',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $blog->id }}</td>
                                    </tr>
                                    <tr>
                                    <th> Nama </th>
                                    <td> {{ $blog->nama }} </td
                                    ></tr>
                                    <tr>
                                    <th> Konten </th>
                                    <td> {{ $blog->konten }} </td>
                                    </tr>
                                    <tr>
                                    <th> Kategori </th>
                                    <td> {{ $blog->kategori }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection