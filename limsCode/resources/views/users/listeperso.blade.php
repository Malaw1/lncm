@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Acceuil</a> <a href="#" class="current">Stocks</a> </div>
    <h1>Gestion du Personnel</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5></h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Prenom</th>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Date Embauchement</th>
                  
                </tr>
              </thead>
              <tbody>
              @foreach ($users as $users )
                  <tr class="odd gradeX">
                  <td>{{ $users->id}}</td>
                  <td>{{ $users->fname}}</td>
                  <td>{{ $users->lname}}</td>
                  <td>{{ $users->email}}</td>
                  <td>{{ $users->created_at}}</td>
                  
                </tr>
              @endforeach
                
              </tbody>
            </table>

            @endsection