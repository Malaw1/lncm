@extends('layouts.app')

@section('content')
<div class="card-body">
    <a href="{{ url('/admin/reactifs') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
    <br />
    <br />

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ url('/admin/reactifs') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}

    <div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Acceuil</a> <a href="#">Reactifs</a> <a href="#" class="current">Nouveau Reactifs</a> </div>
    </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Ajouter Nouveau Reactif</h5>
          </div>
          <div class="widget-content nopadding">
          <formid="form-wizard" method="POST" action="{{ url('/admin/reactifs') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
              <div id="form-wizard-1" class="step">
                @include ('admin.reactifs.form')
              </div>
              <div class="form-actions">
                <a href="{{ url('/admin/reactifs') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
                <div id="status"></div>
              </div>
              <div id="submitted"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

                       
@endsection
