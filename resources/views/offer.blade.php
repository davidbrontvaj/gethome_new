@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Offer</div>

                <div class="panel-body">
                    Ponuky:
                    @foreach ($properties as $property)
                        <div><a href="properties/{{$property->id}}/{{$property->url}}">{{$property->title}}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
