@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  @include ('partials.session_alerts')

  <div class="row">

    @include ('admin.partials.sidebar', ['plural' => 'Grupos', 'singular' => 'Grupo', 'resource' => 'acl_groups' ])

    <div class="col-lg-10">
      <fieldset>
        <legend>{{ $title }}</legend>

        {{ Form::open(['route' => 'admin.acl_groups.store', 'class' => 'form']) }}

          <div class="form-group">
            {{ Form::label('name', 'Nome') }}
            <div class="row">
              <div class="col-xs-4">
                {{ Form::text('name', Input::old('name'), ['class' => 'form-control', 'placeholder' => 'Digite o nome do grupo aqui']) }}
              </div>
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('description', 'Descrição') }}
            <div class="row">
              <div class="col-xs-12">
                {{ Form::textarea('description', Input::old('description'), ['class' => 'form-control htmleditor', 'placeholder' => 'Digite a descrição aqui']) }}
              </div>
            </div>
          </div>

          <div class="checkbox">
            <label for="active">
              {{ Form::checkbox('active', Input::old('active'), true, []) }} Ativo?
            </label>
          </div>

          {{ Form::submit('Salvar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
      </fieldset>
    </div>
</div>

@stop
