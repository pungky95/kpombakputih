@extends('layouts.adminlte')
@section('title','Admin Dashboard')
@section('bungalow','active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bungalow
        <small>Edit Bungalow</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Bungalow</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Upload Size Max 2 MB, Please make sure before upload because process cannot be undone</label>
              {!! Form::open(['url' => url('/bungalowphoto'),'class' => 'dropzone', 'files'=>true, 'id'=>'mydropzone']) !!}
              {!! Form::close() !!} 
              <div id ="up_images">
              
              </div>
               {!! Form::model($fasilitas, [
                            'method' => 'PATCH',
                            'url' => ['/bungalow', $bungalow->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
                @if ($errors->has('nama'))
                <div class="form-group has-error">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Bungalow Name </label>
                  <input type="text" id="inputError" name="nama" class="form-control" placeholder="Name" value="{{$bungalow->nama}}">
                  <span class="help-block">{{ $errors->first('nama') }}</span>
                </div>
                @else
                <label>Bungalow Name</label>
                <input type="text" name="nama" class="form-control" placeholder="Name" value="{{$bungalow->nama}}">
                @endif
                
                @if($errors->has('fasilitas'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Facilities </label>
                <select class="form-control select2" multiple="multiple" name="fasilitas[]" data-placeholder="Select Facilities" style="width: 100%;">
                @php $i=0; @endphp
                @foreach($fasilitas as $items)
                @foreach($bungalow_fasilitas as $fasilitas_id)
                  @if($items->id == $fasilitas_id->fasilitas_id)
                  <option selected>{{$items->nama}}</option>
                  @php $i=$items->id; @endphp
                  @endif
                @endforeach
                @if($items->id != $i)
                <option>{{$items->nama}}</option>
                @endif
                @endforeach
                </select>
                <span class="help-block">{{ $errors->first('fasilitas') }}</span>
                </div>
                @else
                <label> Facilities </label>
                <select class="form-control select2" multiple="multiple" name="fasilitas[]" data-placeholder="Select Facilities" style="width: 100%;">
                @php $i=0; @endphp
                @foreach($fasilitas as $items)
                @foreach($bungalow_fasilitas as $fasilitas_id)
                  @if($items->id == $fasilitas_id->fasilitas_id)
                  <option selected>{{$items->nama}}</option>
                  @php $i=$items->id; @endphp
                  @endif
                @endforeach
                @if($items->id != $i)
                <option>{{$items->nama}}</option>
                @endif
                @endforeach
                </select>
                @endif
                @if($errors->has('tarif_high'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> High Season </label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_high" id="inputError" class="form-control" value="{{$bungalow->tarif_high}}">
                <span class="input-group-addon">.00</span>
                </div>
                <span class="help-block">{{ $errors->first('tarif_high') }}</span>
                </div>
                @else
                <label> High Season </label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_high" class="form-control" value="{{$bungalow->tarif_high}}">
                <span class="input-group-addon">.00</span>
                </div>
                @endif

                @if($errors->has('tarif_low'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Low Season </label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_low" id="inputError" class="form-control" value="{{$bungalow->tarif_low}}">
                <span class="input-group-addon">.00</span>
                </div>
                <span class="help-block">{{ $errors->first('tarif_low') }}</span>
                </div>
                @else
                <label> Low Season </label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_low" class="form-control" value="{{$bungalow->tarif_low}}">
                <span class="input-group-addon">.00</span>
                </div>
                @endif

                @if ($errors->has('jumlah_kamar'))
                <div class="form-group has-error">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Room(s) </label>
                  <input type="number" id="inputError" name="jumlah_kamar" class="form-control" min="1" value="{{$bungalow->jumlah_kamar}}">
                  <span class="help-block">{{ $errors->first('jumlah_kamar') }}</span>
                </div>
                @else
                <label> Room(s) </label>
                <input type="number" name="jumlah_kamar" class="form-control" min="1" value="{{$bungalow->jumlah_kamar}}">
                @endif

                @if($errors->has('keterangan'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Descriptions </label>
                <textarea name="keterangan" class="textarea" placeholder="Write Description Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$bungalow->keterangan!!}</textarea>
                <span class="help-block">{{ $errors->first('keterangan') }}</span>
                </div>
                @else
                <label> Descriptions </label>
                <textarea name="keterangan" class="textarea" placeholder="Write Description Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$bungalow->keterangan!!}</textarea>
                @endif
                {!! Form::submit('Update', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
@endsection
