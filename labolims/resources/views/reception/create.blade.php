@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
        <h1>Enregistrement</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span8">
                <div class="widget-box">
                    <div class="widget-content nopadding">
                        <form action="{{ route('reception.store')}}" method="post" class="form-horizontal">
                            {{ csrf_field()}}
                            <div class="control-group">
                            <label class="control-label">Client :</label>
                            <div class="controls">
                                <input placeholder="Client" name="client" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[]" class="span6" type="text">                    
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Nouveau Client</button>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Date Reception :</label>
                                <div class="controls">
                                    <input type="date" class="span6 form-control" required placeholder="" name="dateRecep" spellcheck="false"  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Observation</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Lot" name="observation" spellcheck="false" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nouveau Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" class="form">
        {{ csrf_field()}}
            <div class="control-group">
                <label class="control-label">Nom ou Enseigne Commerciale :</label>
                <div class="controls">
                    <input type="text" class="span5 form-control" required placeholder="Nom ou Enseigne Commerciale"  name="name" spellcheck="false" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Adresse :</label>
                <div class="controls">
                    <input type="text" class="span5 form-control" required placeholder="Adresse"  name="adresse" spellcheck="false" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Telephone :</label>
                <div class="controls">
                    <input type="text" class="span5 form-control" required placeholder="Telephone"  name="phone" spellcheck="false" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                    <input type="text" class="span5 form-control" required placeholder="@ Email"  name="email" spellcheck="false" />
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>