@extends('layouts.clean')

@section('content')

 <!-- Add new property section -->
<section id="add-property" class="padding listing1">


<div class="container">


    <div class="row">
          
          <div class="col-sm-1 col-md-2"></div>

            

           <div class="col-sm-10 col-md-8">

                
                <h2 class="text-uppercase bottom40">Pridať nový inzerát</h2>


                <div class="rounded-box">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                
                                <form role="form" method="POST" action="add-property" class="callus border_radius submit_property"> 

                                    {{ csrf_field() }}

                                    <div class="form-group bottom30">

                                      
                                      <div class="ordering-number">1</div>
                                      <h3 class="ordering-headline">Typ inzerátu</h3>    

                                      <div class="clearfix"></div>

                                        <label class="radio-inline">
                                            <input type="radio" name="type" id="inlineRadio1" value="1"> Ponúkam prenájom
                                        </label>

                                        <label class="radio-inline">
                                            <input type="radio" name="type" id="inlineRadio1" value="2"> Ponúkam spolubývanie
                                        </label>

                                    </div>


                                    <div class="divider"></div>



                                       <div class="ordering-number">2</div>
                                        <h3 class="ordering-headline">Základné informácie (povinné)</h3>

                                        <div class="clearfix"></div>

                                        <div class="form-group">


                                        <label for="available_from" class="control-label">Dostupný od:</label>

                                        <div class="input-group date" data-provide="datepicker">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" class="form-control pull-right" name="available_from" id="datepicker">
                                        </div>
                                        <!-- /.input group -->
                                  </div>
                                  <!-- /.form group -->



                                  <div class="form-group">

                                  <label for="disposition" class="control-label">Dispozícia bytu</label>

                                      <select name="disposition" class="form-control">

                                          <option value="1">1-izbový byt</option>
                                          <option value="2">2-izbový byt</option>
                                          <option value="3">3-izbový byt</option>
                         
                                                           
                                      </select>
                                    

                                  </div>



                                     <div class="form-group">    

                                            <label for="price" class="control-label">Počet postelí</label>
                                            <input class="form-control" type="number" name="beds"><br>

                                    </div>

                                    <div class="form-group">



                                            <label for="address_city" class="control-label">Mesto</label>
                                                <select name="address_city" class="form-control" disabled>

                                                  <option selected="selected" value="1">Bratislava</option>


                                                </select>
                                                   <span class="info">
                                                   <i class="fa fa-warning"></i>
                                                   V tomto momente je možné pridať len inzeráty v meste Bratislava.</span>
                                    </div>



                                    <div class="form-group">    
                                                         
                                            <label for="address_street" class="control-label">Ulica</label>
                                            <input class="form-control" type="text" name="address_street" value="{{ old('address_street') }} ">
                                                  
                                    </div>

                                  

                                              <div class="divider"></div>

                                     <div class="ordering-number">3</div>
                                      <h3 class="ordering-headline">Cena (povinné)</h3>

                                      <div class="clearfix"></div>

                                    <div class="form-group">    

                                            <label for="price" class="control-label">Cena</label>
                                            <input class="form-control" type="number" name="price"><br>

                                    </div>


                                    <div class="form-group">    



                                            <label for="deposit" class="control-label">Depozit</label>

                                            <div class="clearfix"></div>

                                                                 <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> Áno
                                        </label>

                                        <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Nie
                                        </label>


                                            <input class="form-control top20" type="number" name="deposit"><br>

                                    </div>



                                      <div class="divider"></div>

                                     <div class="ordering-number">4</div>
                                      <h3 class="ordering-headline">Inzerát a fotografie</h3>

                                      <div class="clearfix"></div>


                                        <div class="form-group">
                    
                                                                 
                                        <label for="title" class="control-label">Nadpis</label>
                                        <input class="form-control" type="text" name="title" value="{{ old('title') }} ">

                                    </div>


                                    <div class="form-group">    
                                                                 
                                        <label for="description" class="control-label">Popis</label>
                                        <textarea name="description" class="form-control" rows="4"></textarea>

                                    </div>


                                    <div class="form-group">
                                          <label for="exampleInputFile">Fotografie</label>
                                          <input type="file" id="exampleInputFile">
                                    </div>




                                      <div class="divider"></div>

                                     <div class="ordering-number">5</div>
                                      <h3 class="ordering-headline">Ďaľšie informácie (nepovinné)</h3>

                                      <div class="clearfix"></div>


                                    <div class="form-group">
                                            <label for="condition" class="control-label">Stav bytu</label>
                                                <select name="condition" class="form-control">
                                                  
                                                        <option selected="selected" value=""></option>
                                                                                 
                                                </select>
                         
                                    </div>


                                    <div class="form-group">    

                                            <label for="area" class="control-label">Výmera</label>
                                            <input class="form-control" type="number" name="area"><br>

                                    </div>        

                                <div class="form-group bottom40">
                                            <label for="equiped" class="control-label">Zariadenie bytu</label>
                                                <select name="equiped" class="form-control">
                                                 
                                                        <option selected="selected" value=""></option>
                                                  
                                                      <option value=""></option> 
                                                
                                                </select>
                                </div>


                                 <div class="form-group">

                                            <button type="submit" class="btn btn-success btn-lg btn-block">Pridať inzerát</button>
                         
                                </div>

                            </div>
                    </div> 



                    </form> </div>
    </div><!-- END col-sm-1O col-md-8 -->

    </div>

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
