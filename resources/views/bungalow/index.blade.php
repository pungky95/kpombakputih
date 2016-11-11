@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bungalow</div>
                    <div class="panel-body">

                        <a href="{{ url('/bungalow/create') }}" class="btn btn-primary btn-xs" title="Add New Bungalow"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nama </th><th> Tarif Low </th><th> Tarif High </th><th> Keterangan </th><th> Jumlah Kamar </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bungalow as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td><td>{{ $item->tarif_low }}</td><td>{{ $item->tarif_high }}</td><td>{{ $item->keterangan }}</td><td>{{ $item->jumlah_kamar }}</td>
                                        <td>
                                            <a href="{{ url('/bungalow/' . $item->id) }}" class="btn btn-success btn-xs" title="View Bungalow"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/bungalow/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Bungalow"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/bungalow', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Bungalow" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Bungalow',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $bungalow->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection