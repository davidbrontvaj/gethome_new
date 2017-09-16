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


      @foreach ($properties as $property)
        <div class="cbp-item sale parent" data-id={{$property->id}}> 
          <div class="property_item">
            <div class="image">
              <a href=properties/{{$property->id}}><img src="images/listing1.jpg" alt="latest property" class="img-responsive"></a> <!-- hlavny obrazok -->

              <div class="price clearfix">
                <span class="tag pull-right">{{$property->price}} € / mesiac</span> <!-- Cena -->
              </div>
              <span class="tag_t">  {{$types->where('id',$property->type)->first()->name}}   </span>  <!-- typ ubytka podnajom / spolubyvanie atd -->
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a class="titleofproperty" href=properties/{{$property->id}}>{{$property->title}}</a></h3><!-- hlavný nadpis -->
                <p>{{$property->address_street}}, {{$property->address_city}}</p> <!-- Lokalita -->
              </div>
              <div class="property_meta transparent">
                <span>{{$property->description}}.</span> <!-- text inzerátu skrátený -->

              </div>
              <div class="property_meta transparent bottom30">
                <span><i class="icon-select-an-objecto-tool"></i>{{$property->area}} m2</span>  <!-- Výmera -->
                <span><i class="icon-bed"></i>{{$dispositions->where('id',$property->disposition)->first()->name}} </span>   <!-- Dispozícia -->
                <span><i class="icon-calendar"></i>od {{date('d.m.Y', strtotime($property->available_from))}}</span>   <!-- Dostupný od -->
              </div>

              <div class="favroute clearfix">
                <p><i class="icon-calendar2"></i> Pridané
                  @if (floor(abs(strtotime(date('Y-m-d')) -strtotime($property->created_at))/86400)==0)
                    dnes
                  @elseif (floor(abs(strtotime(date('Y-m-d')) -strtotime($property->created_at))/86400)==1)
                    pred 1 dňom
                  @elseif (floor(abs(strtotime(date('Y-m-d')) -strtotime($property->created_at))/86400)<8)
                    pred {{floor(abs(strtotime(date('Y-m-d')) -strtotime($property->created_at))/86400)}}  dňami
                  @else
                        {{date('d.m.Y', strtotime($property->created_at))}}
                  @endif
                </p>
                <ul class="pull-right">
                  <li  class="innactiveproperty" ><a href="#"><i class="icon-warning"></i></a></li> <!-- Nahlasit neaktualny inzerat -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>
  <!-- Listing Filer End -->
  


@endsection
