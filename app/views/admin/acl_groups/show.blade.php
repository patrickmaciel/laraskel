@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  @include ('partials.session_alerts')

  <div class="row">

    @include ('admin.acl_groups.sidebar', ['plural' => 'Grupos', 'singular' => 'Grupo', 'resource' => 'acl_groups', 'id' => $acl_group->id, 'edit' => true, 'destroy' => true ])

    <div class="col-lg-10">
      <fieldset>
        <legend>{{ $title }}</legend>

        <div class="view-actions hide">
          <a href="{{ URL::route('admin.acl_groups.edit', $acl_group->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
          {{ Form::open(['route' => ['admin.acl_groups.destroy', $acl_group->id], 'class' => 'form-button', 'method' => 'delete']) }}
            <button type='submit' class="btn btn-danger bootbox-confirm-default">
              <i class="fa fa-trash"></i>
            </button>
          {{ Form::close() }}
        </div>

        <dl class="dl-horizontal">
          <dt>ID</dt>
          <dd>{{ $acl_group->id }}</dd>
          <hr>

          <dt>Nome</dt>
          <dd>{{ $acl_group->name }}</dd>
          <hr>

          <dt>Descrição</dt>
          <dd>{{ $acl_group->description }}</dd>
          <hr>

          <dt>Criado em</dt>
          <dd>{{ Libraries\FormatDate::format('d/m/Y H:i:s', $acl_group->created_at) }}</dd>
          <hr>

          <dt>Atualizado em</dt>
          <dd>{{ Libraries\FormatDate::format('d/m/Y H:i:s', $acl_group->updated_at) }}</dd>
          <hr>

          <dt>Ativo?</dt>
          <dd>{{ Libraries\Field::active($acl_group->active) }}</dd>
          <hr>
        </dl>
      </fieldset>
    </div>
</div>

@stop
