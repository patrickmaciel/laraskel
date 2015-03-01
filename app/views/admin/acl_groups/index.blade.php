@extends('layouts.admin')

@section('content')

<div class="container-fluid">

  @include ('partials.session_alerts')

  <div class="row">

    @include ('admin.acl_groups.sidebar', ['plural' => 'Grupos', 'singular' => 'Grupo', 'resource' => 'acl_groups'])

    <div class="col-lg-10">

      <fieldset>
        <legend>{{ $title }}</legend>

        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Criado</th>
              <th>Modificado</th>
              <th class='th-actions'>Ações</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($acl_groups as $acl_group)
            <tr>
              <td>{{ $acl_group->id }}</td>
              <td>{{ $acl_group->name }}</td>
              <td>{{ Libraries\FormatDate::format('d/m/Y H:i:s', $acl_group->created_at) }}</td>
              <td>{{ Libraries\FormatDate::format('d/m/Y H:i:s', $acl_group->updated_at) }}</td>
              <td>
                <a class="btn btn-info" href="{{ URL::route('admin.acl_groups.show', $acl_group->id) }}"><i class="fa fa-eye"></i></a>

                <a class="btn btn-warning" href="{{ URL::route('admin.acl_groups.edit', $acl_group->id) }}"><i class="fa fa-pencil"></i></a>

                {{ Form::open(['route' => ['admin.acl_groups.destroy', $acl_group->id], 'class' => 'form-button', 'method' => 'delete']) }}
                  <button type='submit' class="btn btn-danger bootbox-confirm-default">
                    <i class="fa fa-trash"></i>
                  </button>
                {{ Form::close() }}
              </td>
            </tr>
             @endforeach
          </tbody>
        </table>

        <div class="row">
          <div class="col-lg-12 center">
            <div class="pagination no-margin">
              {{ $acl_groups->appends(Input::except('page'))->links(); }}
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
