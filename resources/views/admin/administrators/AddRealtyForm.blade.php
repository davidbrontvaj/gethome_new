@extends('adminlte::page')


@section('title', 'Pridať realitu')


@section('content_header')
    <h1>Pridať realitu</h1>

@stop


@section('content')
    <p>Na tomto mieste môžeš pridať novú realitu.</p>


    <div class="box box-primary">

        <form class="form-horizontal" role="form" method="POST" action="AddRealty">

            {{ csrf_field() }}

            <div class="form-group">    
                                 
                <label for="ulica" class="col-md-4 control-label">Ulica</label>

                         <div class="col-md-6">
                                 <input class="form-control" type="ulica" name="ulica" value="{{ old('ulica') }} "> <br>
                        </div>

            </div>


            <div class="form-group">    

                        <label for="cena" class="col-md-4 control-label">Cena</label>

                        <div class="col-md-6">
                                    
                                <input class="form-control" type="text" name="cena"><br>
                        </div>

            </div>


             <div class="form-group">
                                        
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success">Pridať realitu</button>
                </div>
                                 
            </div>

        </form>
    </div>

@stop