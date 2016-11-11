@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Galeri</div>
                    <div class="panel-body">

                        <a href="{{ url('/galeri/create') }}" class="btn btn-primary btn-xs" title="Add New Galeri"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Kegiatan Id </th><th> Blog Id </th><th> Foto </th><th> Kategori </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($galeri as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->kegiatan_id }}</td><td>{{ $item->blog_id }}</td><td>{{ $item->foto }}</td>td>{{ $item->kategori }}</td>
                                        <td>
                                            <a href="{{ url('/galeri/' . $item->id) }}" class="btn btn-success btn-xs" title="View Galeri"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/galeri/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Galeri"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/galeri', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Galeri" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Galeri',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $galeri->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection