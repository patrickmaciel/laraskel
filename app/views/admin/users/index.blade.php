@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
      <div class="well">
        <ul class="nav nav-pills nav-stacked">
          <li>
            <a class="btn btn-primary" href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-plus"></i>
              <!-- /.fa fa-plus -->
              Novo Usuário
            </a>
          </li>
          <li>
            <a class="btn btn-default" href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-filter"></i>
              <!-- /.fa fa-filter -->
              Filtrar
            </a>
          </li>
          <li>
            <a class="btn btn-default" href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-check-square"></i>
              <!-- /.fa fa-check-square -->
              Ativos
            </a>
          </li>
          <li>
            <a class="btn btn-default" href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-minus-square"></i>
              <!-- /.fa fa-minus-square -->
              Inativos
            </a>
          </li>
          <li>
            <a class="btn btn-default" href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-trash"></i>
              <!-- /.fa fa-close -->
              Excluídos
            </a>
          </li>
        </ul>
        <!-- /.nav nav-pills nav-stacked -->
      </div>
      <!-- /.well -->
    </div>
    <!-- /.col-lg-4 -->

    <div class="col-lg-10">

      <fieldset>
        <legend>{{ $title }}</legend>

        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>E-mail</th>
              <th>Criado</th>
              <th>Modificado</th>
              <th>Ações</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ Libraries\FormatDate::format('d/m/Y H:i:s', $user->created_at) }}</td>
              <td>{{ Libraries\FormatDate::format('d/m/Y H:i:s', $user->updated_at) }}</td>
              <td>
                <a class="btn btn-info" href="{{ URL::route('admin.users.show', $user->id) }}">Ver</a>
                <!-- /.btn btn-info -->
                <a class="btn btn-warning" href="{{ URL::route('admin.users.edit', $user->id) }}">Editar</a>
                <!-- /.btn btn-warning -->
                <a class="btn btn-danger" href="{{ URL::route('admin.users.destroy', $user->id) }}">Excluir</a>
                <!-- /.btn btn-danger -->
              </td>
            </tr>
             @endforeach
          </tbody>
        </table>
        <!-- /.table -->
      </fieldset>


    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->

@stop
