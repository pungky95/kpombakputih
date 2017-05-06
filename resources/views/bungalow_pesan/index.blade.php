@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bungalow_pesan</div>
                    <div class="panel-body">

                        <a href="{{ url('/bungalow_pesan/create') }}" class="btn btn-primary btn-xs" title="Add New Bungalow_Pesan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Bungalow Id </th><th> Pesan Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bungalow_pesan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->bungalow_id }}</td><td>{{ $item->pesan_id }}</td>
                                        <td>
                                            <a href="{{ url('/bungalow_-pesan/' . $item->id) }}" class="btn btn-success btn-xs" title="View Bungalow_Pesan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/bungalow_-pesan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Bungalow_Pesan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/bungalow_-pesan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Bungalow_Pesan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Bungalow_Pesan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $bungalow_pesan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection