<div class="form-group {{ $errors->has('Nom du Produit') ? 'has-error' : ''}}">
    <label for="Nom du Produit" class="col-md-4 control-label">{{ 'Nom Du Produit' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Nom du Produit" type="text" id="Nom du Produit" value="{{ $demande->NomduProduit or ''}}" >
        {!! $errors->first('Nom du Produit', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Date Fab') ? 'has-error' : ''}}">
    <label for="Date Fab" class="col-md-4 control-label">{{ 'Date Fab' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Date Fab" type="date" id="Date Fab" value="{{ $demande->DateFab or ''}}" >
        {!! $errors->first('Date Fab', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Date Exp') ? 'has-error' : ''}}">
    <label for="Date Exp" class="col-md-4 control-label">{{ 'Date Exp' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Date Exp" type="date" id="Date Exp" value="{{ $demande->DateExp or ''}}" >
        {!! $errors->first('Date Exp', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('formeGalenique') ? 'has-error' : ''}}">
    <label for="formeGalenique" class="col-md-4 control-label">{{ 'Formegalenique' }}</label>
    <div class="col-md-6">
        <select name="formeGalenique" class="form-control" id="formeGalenique" >
    @foreach (json_decode('{"sirop": "Sirop", "comprime": "Comprime", "ampoule": "Ampoule", "gelulle": "gelulle"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($demande->formeGalenique) && $demande->formeGalenique == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('formeGalenique', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('client') ? 'has-error' : ''}}">
    <label for="client" class="col-md-4 control-label">{{ 'Client' }}</label>
    <div class="col-md-6">
        <select name="client" class="form-control" id="client" >
    @foreach (json_decode('{"pna": "PNA", "instPast": "Institut Pasteur", "Dir_Labo": "Direction Labo", "Sphinx_lab": "Sphinx Lab"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($demande->client) && $demande->client == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('client', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
