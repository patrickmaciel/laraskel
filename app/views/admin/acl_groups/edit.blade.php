@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  @include ('partials.session_alerts')

  <div class="row">

    @include ('admin.acl_groups.sidebar', ['plural' => 'Grupos', 'singular' => 'Grupo', 'resource' => 'acl_groups', 'id' => $acl_group->id, 'show' => true, 'destroy' => true ])

    <div class="col-lg-10">
      <fieldset>
        <legend>{{ $title }}</legend>

        {{ Form::open(['route' => ['admin.acl_groups.update', $acl_group->id], 'class' => 'form', 'method' => 'put']) }}

          {{ Form::hidden('id') }}

          <div class="form-group">
            {{ Form::label('name', 'Nome') }}
            <div class="row">
              <div class="col-xs-4">
                {{ Form::text('name', Input::old('name', $acl_group->name), ['class' => 'form-control', 'placeholder' => 'Digite seu seu nome aqui']) }}
                @include ('partials.validator_field', ['field' => 'name'])
              </div>
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('description', 'Descrição') }}
            <div class="row">
              <div class="col-xs-12">
                {{ Form::textarea('description', Input::old('description', $acl_group->description), ['class' => 'form-control htmleditor', 'rows' => 3, 'placeholder' => 'Digite a descrição aqui']) }}
              </div>
            </div>
          </div>

          {{ Form::submit('Salvar', ['class' => 'btn btn-success']) }}
        {{ Form::close() }}
      </fieldset>
    </div>
</div>

@stop
