<label>Upload Size Max 2 MB, Please make sure before upload because process cannot be undone</label>
                    {!! Form::open(['url' => url('/bungalowphoto'),'enctype'=>'multipart/form-data', 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}
                    {!! Form::close() !!} 
              {!! Form::open(['url' => url('/bungalow'), 'files' => true]) !!}
                @if ($errors->has('nama'))
                <div class="form-group has-error">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Bungalow Name </label>
                  <input type="text" id="inputError" name="nama" class="form-control" placeholder="Name">
                  <span class="help-block">{{ $errors->first('nama') }}</span>
                </div>
                @else
                <label>Bungalow Name</label>
                <input type="text" name="nama" class="form-control" placeholder="Name">
                @endif
                
                @if($errors->has('fasilitas'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Facilities </label>
                <select class="form-control select2" multiple="multiple" name="fasilitas[]" data-placeholder="Select Facilities" style="width: 100%;">
                  @foreach($fasilitas as $items)
                  <option>{{ $items->nama }}</option>
                  @endforeach
                </select>
                <span class="help-block">{{ $errors->first('fasilitas') }}</span>
                </div>
                @else
                <label> Facilities </label>
                <select class="form-control select2" multiple="multiple" name="fasilitas[]" data-placeholder="Select Facilities" style="width: 100%;">
                  @foreach($fasilitas as $items)
                  <option>{{ $items->nama }}</option>
                  @endforeach
                </select>
                @endif
                @if($errors->has('tarif_high'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> High Season </label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_high" id="inputError" class="form-control">
                <span class="input-group-addon">.00</span>
                </div>
                <span class="help-block">{{ $errors->first('tarif_high') }}</span>
                </div>
                @else
                <label> High Season </label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_high" class="form-control">
                <span class="input-group-addon">.00</span>
                </div>
                @endif

                @if($errors->has('tarif_low'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Low Season </label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_low" id="inputError" class="form-control">
                <span class="input-group-addon">.00</span>
                </div>
                <span class="help-block">{{ $errors->first('tarif_low') }}</span>
                </div>
                @else
                <label> Low Season </label>
                <div class="input-group">
                <span class="input-group-addon">&euro;</span>
                <input type="number" min="1" name="tarif_low" class="form-control">
                <span class="input-group-addon">.00</span>
                </div>
                @endif

                @if ($errors->has('jumlah_kamar'))
                <div class="form-group has-error">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Room(s) </label>
                  <input type="number" id="inputError" name="jumlah_kamar" class="form-control" min="1">
                  <span class="help-block">{{ $errors->first('jumlah_kamar') }}</span>
                </div>
                @else
                <label> Room(s) </label>
                <input type="number" name="jumlah_kamar" class="form-control" min="1">
                @endif

                @if($errors->has('keterangan'))
                <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Descriptions </label>
                <textarea name="keterangan" class="textarea" placeholder="Write Description Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                <span class="help-block">{{ $errors->first('keterangan') }}</span>
                </div>
                @else
                <label> Descriptions </label>
                <textarea name="keterangan" class="textarea" placeholder="Write Description Here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                @endif
                {!! Form::submit('Add', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
              {!! Form::close() !!}