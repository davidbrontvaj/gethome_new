@extends('adminlte::page')


@section('title', 'Zoznam realit')


@section('content_header')
    <h1>Zoznam realit</h1>

@stop

@section('content')
 <div class="box box-primary">

            <div class="box-header">
              <h3 class="box-title">Reality</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Užívateľ</th>
                  <th>Dátum pridania</th>
                  <th>Stav</th>
                  <th>Názov</th>
                  <th>Akcia</th>
                </tr>


                @foreach ($properties as $property)
                
                    <tr>
                        <td>{{$property->id}}</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><a href="edit/{{$property->id}}">{{$property->title}}</a></td>
                        <td>
                            <a href="edit/{{$property->id}}">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                    </tr> 
                @endforeach

                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->

@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop