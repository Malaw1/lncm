@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
        <h1>Registre de Reception</h1>
    </div>
    <div class="container-fluid">

  <div class="fr">
      <a href="/reception/create" class="btn btn-primary btn-large">Nouvel Enreg</a>
  </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Registre de Reception</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Numero d'Enreg. </th>
                  <th>Client</th>
                  <th>Date de Reception</th>
                  <th>Observation</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($recep as $recep)
                <tr class="odd gradeX">
                    <td>{{$recep->id}}</td>
                    <td>{{$recep->name}}</td>
                    <td>{{$recep->dateRecep}}</td>
                    <td>{{$recep->observation}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
</div>
@endsection