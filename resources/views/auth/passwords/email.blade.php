@extends('layouts.basic')

@section('content')


<section id="reset_password" class="padding">
<div class="container">


     <div class="row">
              <div class="col-sm-12 text-center">
                <h2 class="uppercase">Resetovať heslo</h2> <!-- nadpis sekcie --> 
                <p class="heading_space">Zabudol/a si svoje heslo? Nevadí, pošleme ti nové :) </p> <!-- podnadpis sekcie -->
              </div>
    </div>


    <div class="row bottom40">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">



                                              <!-- grid celeho formu -->
                        <div class="col-md-8 col-md-offset-2 top20">


                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="">E-mail</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Poslať link na reset hesla
                                </button>
                            </div>
                        </div>
                    </form>

                    </div>  <!-- emd grid celeho formu -->

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
