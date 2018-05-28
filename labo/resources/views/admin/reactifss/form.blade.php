<div class="form-group {{ $errors->has('idReactifs') ? 'has-error' : ''}}">
    <label for="idReactifs" class="col-md-4 control-label">{{ 'Idreactifs' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idReactifs" type="number" id="idReactifs" value="{{ $reactif->idReactifs or ''}}" >
        {!! $errors->first('idReactifs', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('designation') ? 'has-error' : ''}}">
    <label for="designation" class="col-md-4 control-label">{{ 'Designation' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="designation" type="text" id="designation" value="{{ $reactif->designation or ''}}" >
        {!! $errors->first('designation', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('conditionnement') ? 'has-error' : ''}}">
    <label for="conditionnement" class="col-md-4 control-label">{{ 'Conditionnement' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="conditionnement" type="text" id="conditionnement" value="{{ $reactif->conditionnement or ''}}" >
        {!! $errors->first('conditionnement', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lot') ? 'has-error' : ''}}">
    <label for="lot" class="col-md-4 control-label">{{ 'Lot' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="lot" type="number" id="lot" value="{{ $reactif->lot or ''}}" >
        {!! $errors->first('lot', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fabriquant') ? 'has-error' : ''}}">
    <label for="fabriquant" class="col-md-4 control-label">{{ 'Fabriquant' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fabriquant" type="text" id="fabriquant" value="{{ $reactif->fabriquant or ''}}" >
        {!! $errors->first('fabriquant', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
