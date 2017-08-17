@extends('layouts.basic')

@section('content')



<section id="register" class="padding">
    <div class="container">



     <div class="row">
              <div class="col-sm-12 text-center">
                <h2 class="uppercase">Zaregistrovať sa</h2> <!-- nadpis sekcie --> 
                <p class="heading_space">Vytvor si svoj účet a čerpaj výhody Gethome</p> <!-- podnadpis sekcie -->
              </div>
            </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="callus form-horizontal" method="POST" action="{{ route('register') }}">




                          <!-- grid celeho formu -->
                            <div class="col-md-8 col-md-offset-2 top20">



                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="">Meno</label>

                                        
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="">E-mail</label>

                                       
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="">Heslo</label>

                                       
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        
                                    </div>

                                    <div class="form-group bottom40">
                                        <label for="password-confirm" class="">Potvrdiť heslo</label>

                                       
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                       
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                                Vytvoriť účet
                                            </button>
                                        </div>
                                    </div>
                            </div>  <!-- emd grid celeho formu -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
