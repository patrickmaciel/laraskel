<div class="col-lg-2">
  <div class="sidebar-nav">
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <span class="visible-xs navbar-brand">Sidebar menu</span>
      </div>
      <div class="navbar-collapse collapse sidebar-navbar-collapse">
        <ul class="nav navbar-nav">
          @if (!empty($show))
            <li class='alert-info'>
              <a href="{{ URL::route('admin.'.$resource.'.show', $id) }}">
                <i class="fa fa-eye"></i>
                Visualizar
              </a>
            </li>
          @endif

          @if (!empty($edit))
            <li class='alert-warning'>
              <a href="{{ URL::route('admin.'.$resource.'.edit', $id) }}">
                <i class="fa fa-pencil"></i>
                Editar
              </a>
            </li>
          @endif

          @if (!empty($destroy))
            <li class='alert-danger'>
              <a href="{{ URL::route('admin.'.$resource.'.destroy', $id) }}">
                <i class="fa fa-trash"></i>
                Excluir
              </a>
            </li>
          @endif

          <li>
            <a href="{{ URL::route('admin.'.$resource.'.index') }}">
              <i class="fa fa-th-list"></i>
              Listar {{ $plural }}
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.'.$resource.'.create') }}">
              <i class="fa fa-plus"></i>
              Novo {{ $singular }}
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.'.$resource.'.create') }}">
              <i class="fa fa-filter"></i>
              Filtrar
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.'.$resource.'.create') }}">
              <i class="fa fa-check-square"></i>
              Ativos
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.'.$resource.'.create') }}">
              <i class="fa fa-minus-square"></i>
              Inativos
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.'.$resource.'.create') }}">
              <i class="fa fa-trash"></i>
              Excluídos
            </a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
