@extends('adminlte::page')


@section('title', 'Zoznam realit')


@section('content_header')
    <h1>Zoznam realit</h1>

@stop

@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Offer</div>

                <div class="panel-body">
                    Ponuky:
                    @foreach ($properties as $property)
                        <div><a href="edit/{{$property->id}}">{{$property->id}}|{{$property->title}}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop