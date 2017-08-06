@extends('layouts.basic')

@section('content')

 <!-- Listing Filer -->
<section id="property" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">Podnájom Bratislava</h2> <!-- nadpis sekcie --> 
        <p class="heading_space">Našli sme pre vás nasledovné inzeráty:</p> <!-- podnadpis sekcie -->
      </div>
    </div>

    <div id="property-gallery" class="cbp listing1">

<!-- Jedna ponuka start -->

      <div class="cbp-item sale">
        <div class="property_item">
          <div class="image">
            <a href="#."><img src="images/listing1.jpg" alt="latest property" class="img-responsive"></a> <!-- hlavny obrazok --> 

            <div class="price clearfix"> 
              <span class="tag pull-right">250 € / mesiac</span> <!-- Cena -->
            </div>
            <span class="tag_t">Podnájom</span>  <!-- typ ubytka podnajom / spolubyvanie atd -->
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="#.">Pekný 1-izbový byt na Trnavskom mýte</a></h3><!-- hlavný nadpis --> 
              <p>Levická, Bratislava</p> <!-- Lokalita -->
            </div>
            <div class="property_meta transparent"> 
            <span>Ponúkam na prenájom tento krásny 1 izbový byt...</span> <!-- text inzerátu skrátený -->
              
            </div>
            <div class="property_meta transparent bottom30">
                <span><i class="icon-select-an-objecto-tool"></i>25 m2</span>  <!-- Výmera -->
                <span><i class="icon-bed"></i>2-izbový byt</span>   <!-- Dispozícia -->
                <span><i class="icon-calendar"></i>od 01.08.2017</span>   <!-- Dostupný od -->
            </div>

            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;Pred 5 dňami </p>
              <ul class="pull-right">
                <li><a href="#"><i class="icon-warning"></i></a></li> <!-- Nahlasit neaktualny inzerat -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    
<!-- Jedna ponuka end -->

    </div>
  </div>
</section>
  <!-- Listing Filer End -->
  


@endsection
