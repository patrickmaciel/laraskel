@extends('layouts.admin')

@section('content')

<div class="container-fluid">

  @include ('partials.session_alerts')

  <div class="row">

    @include ('admin.users.sidebar')

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
                {{ Form::open(['route' => ['admin.users.destroy', $user->id], 'class' => 'form-button', 'method' => 'delete']) }}
                  {{ Form::submit('Excluir', ['class' => 'btn btn-danger bootbox-confirm-default']) }}
                {{ Form::close() }}
                <!-- /.btn btn-danger -->
              </td>
            </tr>
             @endforeach
          </tbody>
        </table>

        <div class="row">
          <div class="col-lg-12 center">
            <div class="pagination no-margin">
              {{ $users->appends(Input::except('page'))->links(); }}
            </div>
          </div>
        </div>
      </fieldset>


    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->

@stop
