@extends('adminlte::page')


@section('title', 'Pridať realitu')


@section('content_header')
    <h1>Pridať realitu</h1>

@stop


@section('content')
    <p>Na tomto mieste môžeš pridať novú realitu.</p>


    <div class="box box-primary">


        <div class="box-header with-border">

            <h3 class="box-title">Základné údaje</h3>

        </div>


         <div class="box-body">

            <form role="form" method="POST" action="add-property">

                {{ csrf_field() }}

                <div class="form-group">    
                                             
                    <label for="title" class="control-label">Nadpis</label>
                    <input class="form-control" type="text" name="title" value="{{ old('title') }} ">

                </div>


                <div class="form-group">    
                                             
                    <label for="description" class="control-label">Popis</label>
                    <textarea class="form-control" rows="4"></textarea>

                </div>


                <div class="form-group">

                    <label for="disposition" class="control-label">Dispozícia bytu</label>
                        <select name="disposition" class="form-control select2">
                              <option selected="selected">Nie je uvedené</option>
                              <option>1-izbový byt</option>
                              <option>2-izbový byt</option>
                              <option>3-izbový byt</option>
                              <option>4-izbový byt</option>
                        </select>

                  </div>

                <div class="form-group">
                        <label for="type" class="control-label">Typ inzerátu</label>
                            <select name="type" class="form-control select2">
                                  <option selected="selected">Nie je uvedené</option>
                                   <option>Samostatná izba</option>
                                  <option>Spolubývanie</option>
                                  <option>Celý byt</option>                               
                            </select>
                </div>
 



                <div class="form-group">    

                        <label for="price" class="control-label">Cena</label>
                        <input class="form-control" type="number" name="price"><br>

                </div>


                <div class="form-group">    

                        <label for="deposit" class="control-label">Depozit</label>
                        <input class="form-control" type="number" name="deposit"><br>

                </div>


                <div class="form-group">
                <label for="available_from" class="control-label">Dostupný od:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="available_from" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->


            </div>

                <div class="box-header with-border">

                     <h3 class="box-title">Údaje o lokalite</h3>

                </div>


            <div class="box-body">

                <div class="form-group">    
                                     
                        <label for="address_street" class="control-label">Ulica</label>
                        <input class="form-control" type="text" name="address_street" value="{{ old('address_street') }} ">
                              
                </div>


                <div class="form-group">    
                                     
                        <label for="address_city" class="control-label">Mesto</label>
                        <input class="form-control" type="text" name="address_city" value="{{ old('address_city') }} ">
                              
                </div>

                
            </div>


             <div class="box-header with-border">

                     <h3 class="box-title">Fotografie</h3>

            </div>

            <div class="box-body">


                <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                </div>

            </div>


            <div class="box-header with-border">

                     <h3 class="box-title">Doplnkové údaje</h3>

            </div>

            <div class="box-body">

                <div class="form-group">
                        <label for="condition" class="control-label">Stav bytu</label>
                            <select name="condition" class="form-control select2">
                                  <option selected="selected">Nie je uvedené</option>
                                   <option>Čiastočná rekonštrukcia</option>
                                  <option>Úplná rekonštrukcia</option>
                                  <option>Nový</option>  
                                  <option>Pôvodný stav</option>                             
                            </select>
                </div>



                <div class="form-group">    

                        <label for="area" class="control-label">Výmera</label>
                        <input class="form-control" type="number" name="area"><br>

                </div>        

            <div class="form-group">
                        <label for="equiped" class="control-label">Zariadenie bytu</label>
                            <select name="equiped" class="form-control select2">
                                  <option selected="selected">Nie je uvedené</option>
                                   <option>Plne zariadený</option>
                                  <option>Čiastočne zariadený</option>
                                  <option>Nezariadený</option>                             
                            </select>
            </div>



            </div>


            



            <div class="form-group">

                        <button type="submit" class="btn btn-success">Pridať realitu</button>
     
            </div>

            </form>


    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop