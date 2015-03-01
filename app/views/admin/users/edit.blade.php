@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  @include ('partials.session_alerts')

  <div class="row">

    @include ('admin.users.sidebar', ['plural' => 'Usuários', 'singular' => 'Usuário', 'resource' => 'users', 'id' => $user->id, 'show' => true, 'destroy' => true ])

    <div class="col-lg-10">
      <fieldset>
        <legend>{{ $title }}</legend>

        <div class="btn-group view-actions hide">
          <a href="#" class="btn btn-default">Button 1</a>
          <a href="#" class="btn btn-default">Button 1</a>
          <a href="#" class="btn btn-default">Button 1</a>
        </div>

        {{ Form::open(['route' => ['admin.users.update', $user->id], 'class' => 'form', 'method' => 'put']) }}

          {{ Form::hidden('id') }}
          {{ Form::hidden('old_email', $user->email) }}
          {{ Form::hidden('old_password', $user->password) }}

          <div class="form-group">
            {{ Form::label('group_id[]', 'Grupos') }}
            <div class="row">
              <div class="col-xs-12">
                @foreach ($groups as $id => $name)
                  <div class="checkbox-inline">
                    {{ Form::checkbox('group_id[]', $id, $user->groups->contains($id)) }} {{ $name }}
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
                {{ Form::text('email', Input::old('email', $user->email), ['class' => 'form-control', 'placeholder' => 'Digite seu e-mail aqui']) }}
                @include ('partials.validator_field', ['field' => 'email'])
              </div>
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('password', 'Senha') }}
            <div class="row">
              <div class="col-xs-4">
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Digite uma nova sua senha aqui ou deixe em branco', 'autocomplete' => 'off']) }}
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
