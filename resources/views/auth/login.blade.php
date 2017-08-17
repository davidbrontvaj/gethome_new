@extends('layouts.basic')

@section('content')


<section id="login" class="padding">
    <div class="container">


        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="uppercase">Prihlásiť sa</h2> <!-- nadpis sekcie --> 
            <p class="heading_space">Prihlás sa do svojho účtu a spravuj svoje inzeráty</p> <!-- podnadpis sekcie -->
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="callus form-horizontal" method="POST" action="{{ route('login') }}">



                            <!-- grid celeho formu -->
                            <div class="col-md-8 col-md-offset-2">


                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="">E-mail</label>

                                <div class="">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="">Heslo</label>

                                <div class="">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Zapamätať si ma
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Prihlásiť sa
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Zabudli ste heslo?
                                    </a>
                                </div>
                            </div>

                            </div> <!-- emd grid celeho formu -->



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
