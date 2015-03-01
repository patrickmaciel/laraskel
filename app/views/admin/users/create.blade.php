@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  @include ('partials.session_alerts')

  <div class="row">

    @include ('admin.users.sidebar', ['plural' => 'Usuários', 'singular' => 'Usuário', 'resource' => 'users' ])

    <div class="col-lg-10">
      <fieldset>
        <legend>{{ $title }}</legend>

        <div class="btn-group view-actions hide">
          <a href="#" class="btn btn-default">Button 1</a>
          <a href="#" class="btn btn-default">Button 1</a>
          <a href="#" class="btn btn-default">Button 1</a>
        </div>

        {{ Form::open(['route' => 'admin.users.store', 'class' => 'form']) }}
          <div class="form-group">
            {{ Form::label('group_id[]', 'Grupos') }}
            <div class="row">
              <div class="col-xs-12">
                @foreach ($groups as $id => $name)
                  <div class="checkbox-inline">
                    {{ Form::checkbox('group_id[]', $id) }} {{ $name }}
                  </div>
                @endforeach
                @include ('partials.validator_field', ['field' => 'group_id'])
              </div>
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('email', 'E-mail') }}
            <div class="row">
              <div class="col-xs-4">
                {{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'Digite seu e-mail aqui']) }}
                @include ('partials.validator_field', ['field' => 'email'])
              </div>
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('password', 'Senha') }}
            <div class="row">
              <div class="col-xs-4">
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Digite sua senha aqui']) }}
                @include ('partials.validator_field', ['field' => 'password'])
              </div>
            </div>
          </div>

          {{ Form::submit('Salvar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
      </fieldset>
    </div>
</div>

@stop
