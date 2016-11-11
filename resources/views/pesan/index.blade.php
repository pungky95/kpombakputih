@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pesan</div>
                    <div class="panel-body">

                        <a href="{{ url('/pesan/create') }}" class="btn btn-primary btn-xs" title="Add New Pesan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nama Pemesan </th><th> Tgl Masuk </th><th> Tgl Keluar </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pesan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama_pemesan }}</td><td>{{ $item->tgl_masuk }}</td><td>{{ $item->tgl_keluar }}</td>
                                        <td>
                                            <a href="{{ url('/pesan/' . $item->id) }}" class="btn btn-success btn-xs" title="View Pesan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/pesan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pesan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/pesan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Pesan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Pesan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pesan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection