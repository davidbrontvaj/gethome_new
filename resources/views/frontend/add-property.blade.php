@extends('layouts.clean')

@section('content')

 <!-- Add new property section -->
<section id="property" class="padding listing1">




<div class="row">
      
      <div class="col-sm-1 col-md-2"></div>

       <div class="col-sm-10 col-md-8">

            <form role="form" method="POST" action="add-property" class="callus clearfix border_radius submit_property">

                {{ csrf_field() }}

                <div class="form-group">    
                                             
                    <label for="title" class="control-label">Nadpis</label>
                    <input class="form-control" type="text" name="title" value="{{ old('title') }} ">

                </div>


                <div class="form-group">    
                                             
                    <label for="description" class="control-label">Popis</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>

                </div>


                <div class="form-group">

                    <label for="disposition" class="control-label">Dispozícia bytu</label>
                        <select name="disposition" class="form-control select2">
    
                                <option selected="selected" value=""></option>
           
                                <option value=""></option> 
    
                        </select>

                </div>

                <div class="form-group">
                        <label for="type" class="control-label">Typ inzerátu</label>
                            <select name="type" class="form-control select2">
                           
                              <option selected="selected" value=""></option>
     
                                <option value=""></option> 
                                       
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

          

                <div class="form-group">    
                                     
                        <label for="address_street" class="control-label">Ulica</label>
                        <input class="form-control" type="text" name="address_street" value="{{ old('address_street') }} ">
                              
                </div>


                <div class="form-group">    
                                     
                        <label for="address_city" class="control-label">Mesto</label>
                        <input class="form-control" type="text" name="address_city" value="{{ old('address_city') }} ">
                              
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





                <div class="form-group">
                        <label for="condition" class="control-label">Stav bytu</label>
                            <select name="condition" class="form-control select2">
                              
                                    <option selected="selected" value=""></option>
                                                             
                            </select>
     
                </div>


                <div class="form-group">    

                        <label for="area" class="control-label">Výmera</label>
                        <input class="form-control" type="number" name="area"><br>

                </div>        

            <div class="form-group">
                        <label for="equiped" class="control-label">Zariadenie bytu</label>
                            <select name="equiped" class="form-control select2">
                             
                                    <option selected="selected" value=""></option>
                              
                                  <option value=""></option> 
                            
                            </select>
            </div>


             <div class="form-group">

                        <button type="submit" class="btn btn-success">Pridať realitu</button>
     
            </div>
</div>



</form>
</div>
</div>


<!--
<div class="row">
      
      <div class="col-sm-1 col-md-2"></div>


      <div class="col-sm-10 col-md-8">
      <h2 class="text-uppercase bottom40">Pridať nový inzerát</h2>


                  <form class="callus clearfix border_radius submit_property">
                            <div class="row">

                                <div class="col-sm-6">
                                  
                                    <div class="single-query form-group bottom20">

                                            <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Ponúkam prenájom
                                           </label>

                                    </div>

                                </div>


                                <div class="col-sm-6">
                                  
                                    <div class="single-query form-group bottom20">

                                            <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Ponúkam spolubývanie
                                           </label>

                                    </div>

                                </div>

                                <div class="col-sm-6">
                                  
                                    <div class="single-query form-group bottom20">
                                            <label>Title</label>
                                            <input type="text" class="keyword-input" placeholder="Enter your property title">
                                    </div>

                                </div>


                                <div class="col-sm-6">
                                  
                                    <div class="single-query form-group bottom20">
                                            <label>Title</label>
                                            <input type="text" class="keyword-input" placeholder="Enter your property title">
                                    </div>

                                </div>


                                
                            </div>
                  </form>
</div>

-->



  </div>
</section>
  <!-- Listing Filer End -->
  


@endsection
