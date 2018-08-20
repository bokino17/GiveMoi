

        <label class="control-label " for="color_name">Color name :</label>
        <div class="form-group{{ $errors->has('color_name') ? ' has-error' : '' }}">
            <input type="name" class="form-control" name="color_name"  id="color_name" minLength="3" placeholder="Color name (exemple: danger,warning,...)"/>
            @if ($errors->has('color_name'))
            <span class="help-block">
                <strong class="text-danger text-center">{{ $errors->first('color_name') }}</strong>
            </span>
            @endif
        </div>
        <label class="control-label" for="slug">Slug :</label>
        <div class="form-group">
            <input type="name" class="form-control" name="slug"  id="slug" placeholder="slug (Pas tres important)" minLength="3" disabled/>
        </div>