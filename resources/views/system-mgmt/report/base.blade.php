@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reports
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-print"></i> Reports</a></li>
        
      </ol>
    </section>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection