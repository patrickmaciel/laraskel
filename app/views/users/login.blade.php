@extends('layouts.login')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6">
        <div class="well" id="login-form">
          <h1>Faça o Login</h1>

          @include ('partials.validator_fields')

          {{ Form::open(['route' => 'login.verify', 'method' => 'post', 'class' => 'form']) }}
            <div class="form-group">
              {{ Form::label('email', 'E-mail') }}
              {{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'Digite seu e-mail']) }}
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              {{ Form::label('password', 'Senha') }}
              {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Digite sua senha']) }}
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              {{ Form::submit('Entrar', ['class' => 'btn btn-primary']) }}
            </div>
            <!-- /.form-group -->
          {{ Form::close() }}
        </div>
        <!-- /.well -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

@stop
