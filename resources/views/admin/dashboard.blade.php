@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ahoj, 

    <!-- vypis meno admina --> 
   {{Auth::guard('web_admin')->user()->name}}

   </h1>

@stop

@section('content')
    <p>Úspešne si sa prihlásil do Gethome administrácie.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop