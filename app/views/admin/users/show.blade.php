@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  @include ('partials.session_alerts')

  <div class="row">

    @include ('admin.users.sidebar')

    <div class="col-lg-10">
      <fieldset>
        <legend>{{ $title }}</legend>

        <div class="btn-group view-actions hide">
          <a href="#" class="btn btn-default">Button 1</a>
          <a href="#" class="btn btn-default">Button 1</a>
          <a href="#" class="btn btn-default">Button 1</a>
        </div>


        <dl class="dl-horizontal">
          <dt>ID</dt>
          <dd>{{ $user->id }}</dd>
          <hr>

          <dt>Grupos</dt>
          <dd>
            <ul>
              @foreach ($user->groups as $group)
                <li>{{ $group->name }}</li>
              @endforeach
            </ul>
          </dd>
          <hr>

          <dt>E-mail</dt>
          <dd>{{ $user->email }}</dd>
          <hr>

          <dt>Senha</dt>
          <dd>{{ $user->password }}</dd>
          <hr>

          <dt>Criado em</dt>
          <dd>{{ Libraries\FormatDate::format('d/m/Y H:i:s', $user->created_at) }}</dd>
          <hr>

          <dt>Atualizado em</dt>
          <dd>{{ Libraries\FormatDate::format('d/m/Y H:i:s', $user->updated_at) }}</dd>
          <hr>

          <dt>Ativo?</dt>
          <dd>{{ Libraries\Field::active($user->active) }}</dd>
          <hr>
        </dl>
      </fieldset>
    </div>
</div>

@stop
